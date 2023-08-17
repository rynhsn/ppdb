"use strict";

// Class definition
var KTCreateAccount = function () {
    // Elements
    var modal;
    var modalEl;

    var stepper;
    var form;
    var formSubmitButton;
    var formContinueButton;

    // Variables
    var stepperObj;
    var validations = [];

    // Private Functions
    var initStepper = function () {
        // Initialize Stepper
        stepperObj = new KTStepper(stepper);

        // Stepper change event
        stepperObj.on('kt.stepper.changed', function (stepper) {
            if (stepperObj.getCurrentStepIndex() === 5) {
                formSubmitButton.classList.remove('d-none');
                formSubmitButton.classList.add('d-inline-block');
                formContinueButton.classList.add('d-none');
            } else if (stepperObj.getCurrentStepIndex() === 6) {
                formSubmitButton.classList.add('d-none');
                formContinueButton.classList.add('d-none');
            } else {
                formSubmitButton.classList.remove('d-inline-block');
                formSubmitButton.classList.remove('d-none');
                formContinueButton.classList.remove('d-none');
            }
        });

        // Validation before going to next page
        stepperObj.on('kt.stepper.next', function (stepper) {
            console.log('stepper.next');

            // Validate form before change stepper step
            var validator = validations[stepper.getCurrentStepIndex() - 1]; // get validator for currnt step

            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');

                    if (status == 'Valid') {
                        stepper.goNext();

                        KTUtil.scrollTop();
                    } else {
                        console.log('Gagal!');
                        //tampilkan di console field yang gagal
                        validator.getElements().forEach(function (input) {
                            console.log(input.name);
                        });

                        Swal.fire({
                            text: "Kayaknya ada yang salah deh, cek lagi ya.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, coba lagi",
                            customClass: {
                                confirmButton: "btn btn-light"
                            }
                        }).then(function () {
                            KTUtil.scrollTop();
                        });
                    }
                });
            } else {
                stepper.goNext();
                KTUtil.scrollTop();
            }
        });

        // Prev event
        stepperObj.on('kt.stepper.previous', function (stepper) {
            console.log('stepper.previous');

            stepper.goPrevious();
            KTUtil.scrollTop();
        });
    }

    var handleForm = function () {
        formSubmitButton.addEventListener('click', function (e) {
            // Validate form before change stepper step
            var validator = validations[3]; // get validator for last form

            validator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Prevent default button action
                    e.preventDefault();

                    // Disable button to avoid multiple click
                    formSubmitButton.disabled = true;

                    // Show loading indication
                    formSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Simulate form submission
                    setTimeout(function () {
                        // Hide loading indication
                        formSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        formSubmitButton.disabled = false;

                        // Create form data object
                        var formData = new FormData(form);
                        formData.append("file_surat_kelulusan", $("#file_surat_kelulusan")[0].files[0]);
                        formData.append("file_kk", $("#file_kk")[0].files[0]);
                        formData.append("file_ktp_ayah", $("#file_ktp_ayah")[0].files[0]);
                        formData.append("file_ktp_ibu", $("#file_ktp_ibu")[0].files[0]);
                        formData.append("file_akta", $("#file_akta")[0].files[0]);
                        formData.append("file_foto", $("#file_foto")[0].files[0]);
                        formData.append("file_ijazah", $("#file_ijazah")[0].files[0]);
                        formData.append("file_kip", $("#file_kip")[0].files[0]);

                        console.log(formData.get("file_surat_kelulusan"));
                        console.log(form.getAttribute('action'));
                        // Perform AJAX request to PHP file
                        fetch(form.getAttribute('action'), {
                            method: 'POST',
                            body: formData
                        })
                            .then(function (response) {
                                // Hide loading indication
                                formSubmitButton.removeAttribute('data-kt-indicator');

                                console.log("Fetch response:", response);
                                if (response.ok) {
                                    // console.log(response.json());
                                    return response.text();
                                } else {
                                    console.log("gagal fetch");
                                    console.error('Request failed:', response.status);
                                }
                                stepperObj.goNext();
                            })
                            .then(function (data) {
                                const response = JSON.parse(data);
                                console.log(response.data.username);
                                // if (response.s)
                                //jika response.status!=success maka tag dengan id="gagal" akan ditampilkan dengan menambahkan d-none
                                if (response.status === 'success'){
                                    document.querySelector('#gagal').classList.add('d-none');
                                    document.querySelector('#berhasil').classList.remove('d-none');
                                    document.querySelector('#username_siswa').innerHTML = response.data.username;
                                    document.querySelector('#password_siswa').innerHTML = response.data.password;
                                }else{
                                    console.log("gagal ambil");
                                    // console.log(response.data);
                                    document.querySelector('#berhasil').classList.add('d-none');
                                    document.querySelector('#gagal').classList.remove('d-none');
                                }

                                // Enable button
                                formSubmitButton.disabled = false;
                                // Proceed to the next step
                                stepperObj.goNext();
                            })
                            .catch(function (error) {
                                // Hide loading indication
                                formSubmitButton.removeAttribute('data-kt-indicator');

                                // Log and handle the error
                                console.error('Request error:', error);

                                // Enable button
                                formSubmitButton.disabled = false;
                            });

                        // Show popup confirmation
                        Swal.fire({
                            text: "Data kamu sudah kami terima.",
                        }).then(function (result) {
                            if (result.isConfirmed) {
                                stepperObj.goNext();
                            }
                        });

                        // stepperObj.goNext();
                    }, 2000);
                } else {
                    Swal.fire({
                        text: "Kayaknya ada yang salah deh, cek lagi ya.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, coba lagi",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then(function () {
                        KTUtil.scrollTop();
                    });
                }
            });
        });
    }

    var initValidation = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        // Step 1
        validations.push(FormValidation.formValidation(
            form,
            {
                fields: {
                    'syarat_ketentuan': {
                        validators: {
                            notEmpty: {
                                message: 'Oops! Kamu harus menyetujui ketentuan.'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        ));

        // Step 2
        validations.push(FormValidation.formValidation(
            form,
            {
                fields: {
                    'jenjang': {
                        validators: {
                            notEmpty: {
                                message: 'Pilih salah satu jenjang pendidikan'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        ));

        // Step 3
        validations.push(FormValidation.formValidation(
            form,
            {
                fields: {
                    'nama_lengkap': {
                        validators: {
                            notEmpty: {
                                message: 'Nama lengkap harus diisi'
                            }
                        }
                    },
                    'nisn': {
                        validators: {
                            notEmpty: {
                                message: 'NISN harus diisi'
                            },
                            digits: {
                                message: 'NISN hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 10,
                                max: 10,
                                message: 'NISN harus berisi 10 angka'
                            }
                        }
                    },
                    'nik': {
                        validators: {
                            notEmpty: {
                                message: 'NIK harus diisi'
                            },
                            digits: {
                                message: 'NIK hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 16,
                                max: 16,
                                message: 'NIK harus berisi 16 angka'
                            }
                        }
                    },
                    'jk': {
                        validators: {
                            notEmpty: {
                                message: 'Silahkan pilih jenis kelamin'
                            }
                        }
                    },
                    'tempat_lahir': {
                        validators: {
                            notEmpty: {
                                message: 'Tempat lahir harus diisi'
                            }
                        }
                    },
                    'tgl_lahir': {
                        validators: {
                            notEmpty: {
                                message: 'Pilih tanggal lahir'
                            }
                        }
                    },
                    'agama': {
                        validators: {
                            notEmpty: {
                                message: 'Pilih agama'
                            }
                        }
                    },
                    'alamat': {
                        validators: {
                            notEmpty: {
                                message: 'Alamat harus diisi.'
                            }
                        }
                    },
                    'jenis_tinggal': {
                        validators: {
                            notEmpty: {
                                message: 'Pilih salah satu.'
                            }
                        }
                    },
                    'desa': {
                        validators: {
                            notEmpty: {
                                message: 'Desa harus diisi.'
                            },
                        }
                    },
                    'kecamatan': {
                        validators: {
                            notEmpty: {
                                message: 'Kecamatan harus diisi.'
                            }
                        }
                    },
                    'kabupaten': {
                        validators: {
                            notEmpty: {
                                message: 'Kabupaten harus diisi.'
                            }
                        }
                    },
                    'provinsi': {
                        validators: {
                            notEmpty: {
                                message: 'Provinsi harus diisi.'
                            },
                        }
                    },
                    'kode_pos': {
                        validators: {
                            notEmpty: {
                                message: 'Kode pos harus diisi.'
                            },
                            digits: {
                                message: 'Kode pos hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 5,
                                max: 5,
                                message: 'Kode pos harus berisi 5 angka'
                            }
                        }
                    },
                    'nama_sekolah': {
                        validators: {
                            notEmpty: {
                                message: 'Nama sekolah harus diisi.'
                            }
                        }
                    },
                    'lokasi_sekolah': {
                        validators: {
                            notEmpty: {
                                message: 'Alamat sekolah harus diisi.'
                            }
                        }
                    },
                    'no_un':{
                            validators:{
                                digits: {
                                    message: 'Nomor No. Ujian Nasional hanya boleh berisi angka'
                                }
                            }
                        },
                    'no_seri_ijazah':{
                            validators:{
                                digits: {
                                    message: 'Nomor No. Seri Ijazah hanya boleh berisi angka'
                                }
                            }
                        },
                    'no_seri_skhun':{
                            validators:{
                                digits: {
                                    message: 'Nomor No. Seri SKHUN hanya boleh berisi angka'
                                }
                            }
                        },
                    'sttb_lulus':{},

                    'nama_ayah': {
                        validators: {
                            notEmpty: {
                                message: 'Nama ayah harus diisi.'
                            }
                        }
                    },
                    'nama_ibu': {
                        validators: {
                            notEmpty: {
                                message: 'Nama ibu harus diisi.'
                            }
                        }
                    },
                    'no_telp': {
                        validators: {
                            notEmpty: {
                                message: 'Nomor telepon harus diisi'
                            },
                            digits: {
                                message: 'Nomor telepon hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 10,
                                max: 15,
                                message: 'No. Telepon minimal 10 digit dan maksimal 15 digit'
                            }
                        }
                    },
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        ));

        //step Berkas
        validations.push(FormValidation.formValidation(
            form,
            {
                fields: {
                    'file_surat_kelulusan': {
                        validators:{
                            notEmpty: {
                                message: 'Berkas file surat kelulusan tidak boleh kosong'
                            }
                        }
                    },
                    'file_kk': {
                        validators:{
                            notEmpty: {
                                message: 'Berkas file kk tidak boleh kosong'
                            }
                        }
                    },
                    'file_ktp_ayah': {
                        validators:{
                            notEmpty: {
                                message: 'Berkas file ktp ayah tidak boleh kosong'
                            }
                        }
                    },
                    'file_ktp_ibu': {
                        validators:{
                            notEmpty: {
                                message: 'Berkas file ktp ibu tidak boleh kosong'
                            }
                        }
                    },
                    'file_akta': {
                        validators:{
                            notEmpty: {
                                message: 'Berkas file akta tidak boleh kosong'
                            }
                        }
                    },
                    'file_foto': {
                        validators:{
                            notEmpty: {
                                message: 'Berkas file foto tidak boleh kosong'
                            }
                        }
                    },
                    'file_ijazah': {},
                    'file_kip': {},
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        ));

        //step konfirmasi
        validations.push(FormValidation.formValidation(
            form,
            {
                fields: {
                    'konfirmasi': {
                        validators: {
                            notEmpty: {
                                message: 'Coba cek lagi ya.'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        ));
    }

    return {
        // Public Functions
        init: function () {
            // Elements
            modalEl = document.querySelector('#kt_modal_create_account');

            if (modalEl) {
                modal = new bootstrap.Modal(modalEl);
            }

            stepper = document.querySelector('#kt_create_account_stepper');

            if (!stepper) {
                return;
            }

            form = stepper.querySelector('#kt_create_account_form');
            formSubmitButton = stepper.querySelector('[data-kt-stepper-action="submit"]');
            formContinueButton = stepper.querySelector('[data-kt-stepper-action="next"]');

            initStepper();
            initValidation();
            handleForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTCreateAccount.init();
});