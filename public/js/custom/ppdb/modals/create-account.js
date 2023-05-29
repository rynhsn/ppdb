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
            if (stepperObj.getCurrentStepIndex() === 7) {
                formSubmitButton.classList.remove('d-none');
                formSubmitButton.classList.add('d-inline-block');
                formContinueButton.classList.add('d-none');
            } else if (stepperObj.getCurrentStepIndex() === 8) {
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

                        // Perform AJAX request to PHP file
                        fetch(form.getAttribute('action'), {
                            method: 'POST',
                            body: formData
                        })
                            .then(function (response) {
                                // Hide loading indication
                                formSubmitButton.removeAttribute('data-kt-indicator');

                                if (response.ok) {
                                    // console.log(response.json());
                                    return response.text();
                                } else {
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
                    'anak_ke': {
                        validators: {
                            notEmpty: {
                                message: 'Harus diisi'
                            },
                            digits: {
                                message: 'Hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 1,
                                max: 2,
                                message: 'Minimal 1 digit dan maksimal 2 digit'
                            }
                        }
                    },
                    'jml_saudara': {
                        validators: {
                            notEmpty: {
                                message: 'Jumlah saudara harus diisi'
                            },
                            digits: {
                                message: 'Jumlah saudara hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 1,
                                max: 2,
                                message: 'Jumlah saudara minimal 1 digit dan maksimal 2 digit'
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

        // Step alamat
        validations.push(FormValidation.formValidation(
            form,
            {
                fields: {
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
                    'jarak': {
                        validators: {
                            notEmpty: {
                                message: 'Jarak rumah ke sekolah harus diisi.'
                            }
                        },
                    },
                    'kendaraan': {
                        validators: {
                            notEmpty: {
                                message: 'Pilih salah satu.'
                            }
                        }
                    }
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

        // Step data orang tua
        validations.push(FormValidation.formValidation(
            form,
            {
                fields: {
                    'no_kk': {
                        validators: {
                            notEmpty: {
                                message: 'Nomor KK harus diisi.'
                            },
                            digits: {
                                message: 'Nomor KK hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 16,
                                max: 16,
                                message: 'Nomor KK harus berisi 16 angka'
                            }
                        }
                    },
                    'nama_ayah': {
                        validators: {
                            notEmpty: {
                                message: 'Nama ayah harus diisi.'
                            }
                        }
                    },
                    'nik_ayah': {
                        validators: {
                            notEmpty: {
                                message: 'NIK ayah harus diisi.'
                            },
                            digits: {
                                message: 'NIK ayah hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 16,
                                max: 16,
                                message: 'NIK ayah harus berisi 16 angka'
                            }
                        }
                    },
                    'pekerjaan_ayah': {
                        validators: {
                            notEmpty: {
                                message: 'Pekerjaan ayah harus diisi.'
                            }
                        }
                    },
                    'pdd_ayah': {
                        validators: {
                            notEmpty: {
                                message: 'Pendidikan ayah harus diisi.'
                            }
                        }
                    },
                    'penghasilan_ayah': {
                        validators: {
                            notEmpty: {
                                message: 'Penghasilan ayah harus diisi.'
                            },
                        }
                    },
                    'status_hidup_ayah': {
                        validators: {
                            notEmpty: {
                                message: 'Pilih salah satu.'
                            },
                        }
                    },
                    'th_lahir_ayah': {
                        validators: {
                            notEmpty: {
                                message: 'Tahun lahir ayah harus diisi.'
                            },
                            digits: {
                                message: 'Tahun lahir ayah hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 4,
                                max: 4,
                                message: 'Tahun lahir ayah harus berisi 4 angka'
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
                    'nik_ibu': {
                        validators: {
                            notEmpty: {
                                message: 'NIK ibu harus diisi.'
                            },
                            digits: {
                                message: 'NIK ibu hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 16,
                                max: 16,
                                message: 'NIK ibu harus berisi 16 angka'
                            }
                        }
                    },
                    'pekerjaan_ibu': {
                        validators: {
                            notEmpty: {
                                message: 'Pekerjaan ibu harus diisi.'
                            }
                        }
                    },
                    'pdd_ibu': {
                        validators: {
                            notEmpty: {
                                message: 'Pendidikan ibu harus diisi.'
                            }
                        }
                    },
                    'penghasilan_ibu': {
                        validators: {
                            notEmpty: {
                                message: 'Penghasilan ibu harus diisi.'
                            },
                        }
                    },
                    'status_hidup_ibu': {
                        validators: {
                            notEmpty: {
                                message: 'Pilih salah satu.'
                            },
                        }
                    },
                    'th_lahir_ibu': {
                        validators: {
                            notEmpty: {
                                message: 'Tahun lahir ibu harus diisi.'
                            },
                            digits: {
                                message: 'Tahun lahir ibu hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 4,
                                max: 4,
                                message: 'Tahun lahir ibu harus berisi 4 angka'
                            }
                        }
                    },
                    'nik_wali': {
                        validators: {
                            digits: {
                                message: 'NIK wali hanya boleh berisi angka'
                            }
                        }
                    },
                    'th_lahir_wali': {
                        validators: {
                            digits: {
                                message: 'Tahun lahir wali hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 4,
                                max: 4,
                                message: 'Tahun lahir wali harus berisi 4 angka'
                            }
                        }
                    },
                    'no_telp_ot': {
                        validators: {
                            notEmpty: {
                                message: 'Nomor telepon orang tua / wali harus diisi.'
                            },
                            digits: {
                                message: 'Nomor telepon orang tua / wali hanya boleh berisi angka.'
                            },
                            stringLength: {
                                min: 10,
                                max: 13,
                                message: 'Nomor telepon orang tua / wali harus berisi 10-13 angka.'
                            }
                        }
                    }
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

        // Step data sekolah asal
        validations.push(FormValidation.formValidation(
            form,
            {
                fields: {
                    'npsn': {
                        validators: {
                            notEmpty: {
                                message: 'NPSN sekolah harus diisi.'
                            },
                            digits: {
                                message: 'NPSN sekolah hanya boleh berisi angka'
                            },
                            stringLength: {
                                min: 8,
                                max: 8,
                                message: 'NPSN sekolah harus berisi 8 angka'
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
                    'pkh':{
                        validators:{
                            digits: {
                                message: 'Nomor PKH hanya boleh berisi angka'
                            }
                        }
                    },
                    'kip':{
                        validators:{
                            digits: {
                                message: 'Nomor KIP hanya boleh berisi angka'
                            }
                        }
                    },
                    'kks':{
                        validators:{
                            digits: {
                                message: 'Nomor KKS hanya boleh berisi angka'
                            }
                        }
                    }
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