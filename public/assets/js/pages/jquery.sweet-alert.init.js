/**
 * Theme: Dastone - Responsive Bootstrap 5 Admin Dashboard
 * Author: Mannatthemes
 * Sweet Alert Js
 */


 
!function ($) {
    "use strict";

    var SweetAlert = function () {
    };

    //examples
    //examples
    SweetAlert.prototype.init = function () {

        //Basic
        $('#sa-basic').on('click', function () {
            Swal.fire('Cualquier tonto puede usar una computadora')
        });

        //A title with a text under
        $('#sa-title').click(function () {
            Swal.fire(
                'El Internet?',
                '¿Esa cosa todavía está por ahí?',
                'pregunta'
            )
        });

        //Success Message
        $('#sa-success').click(function () {
            Swal.fire(
                '¡Buen trabajo!',
                '¡Hiciste clic en el botón!',
                'Exito'
              )
        });

        //Warning Message
        
        $('#sa-warning').click(function () {
            
            swal.fire({
                title: 'Estas Seguro',
                text: "¡No podrás revertir esto!",
                type: 'Advertencia',
                showCancelButton: true,
                confirmButtonText: '¡Sí, bórralo!',
                cancelButtonText: 'No, Cancelalo!',
                reverseButtons: true
              }).then(function(result) {
                if (result.value) {
                  swal.fire(
                    '¡Eliminado!',
                    'Su archivo ha sido eliminado.',
                    'Exito'
                  )
                } else if (
                  // Read more about handling dismissals
                  result.dismiss === Swal.DismissReason.cancel
                ) {
                  swal.fire(
                    'Cancelado',
                    'Tu archivo imaginario está a salvo :)',
                    'Error'
                  )
                }
              })
        });

        // with footer
        $('#sa-footer').click(function () {
          Swal.fire({
            icon: 'Error',
            title: 'Oops...',
            text: '¡Algo salió mal!',
            footer: '<a href>¿Por qué tengo este problema?</a>'
          })
        });


        //Custom Position
        $('#sa-topright-success').click(function () {
          Swal.fire({
            position: 'top-end',
            icon: 'Exito',
            title: 'Tu trabajo ha sido guardado',
            showConfirmButton: false,
            timer: 1500
          })
        });
        //Custom Animation
        $('#sa-custom-animation').click(function () {
          Swal.fire({
            title: 'Animación personalizada con Animate.css',
            showClass: {
              popup: 'Animación fadeInDown faster'
            },
            hideClass: {
              popup: 'Animación fadeOutUp faster'
            }
          })
        });
        
        //Parameter
        $('#sa-params').click(function () {

            Swal.fire({
                title: 'Estas seguro?',
                text: "¡No podrás revertir esto!",
                type: 'Advertencia',
                showCancelButton: true,
                confirmButtonColor: '$Exito',
                cancelButtonColor: '$Peligro',
                confirmButtonText: 'Si, Borra esto!'
              }).then(function(result) {
                if (result.value) {
                  Swal.fire(
                    'Eliminalo!',
                    'Su archivo ha sido eliminado.',
                    'Exito'
                  )
                }
              })
        });

        //Custom Image
        $('#sa-image').click(function () {
            Swal.fire({
                title: 'SoftwareClinic',
                text: 'Modal with a custom image.',
                imageUrl: 'assets/images/logo-sm.png',
                imageHeight: 80,
                animation: false
            })            
        });

        

        //custom html alert
        $('#custom-html-alert').click(function () {
            Swal.fire({
                title: '<strong>HTML <u>example</u></strong>',
                type: 'info',
                html:
                  'Tu puedes usar <b>bold text</b>, ' +
                  '<a href="//github.com">links</a> ' +
                  'Y otro HTML tags',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText:
                  '<i class="fa fa-thumbs-up"></i> Great!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText:
                  '<i class="fa fa-thumbs-down"></i>',
                cancelButtonAriaLabel: 'Thumbs down',
              })
        });

        //Custom width padding
        $('#custom-padding-width-alert').click(function () {
            Swal.fire({
                title: 'Custom width, padding, background.',
                width: 600,
                padding: 100,
                background: 'rgba(254,254,254,0.9) url(assets/images/pattern.png)',
            })
        });

        //Auto Close
        $('#sa-auto-close').click(function () {
            var timerInterval
            Swal.fire({
            title: '¡Alerta de cierre automático!',
            html: 'voy a cerrar en <strong></strong> Segundos.',
            timer: 2000,
            onBeforeOpen: function() {
                Swal.showLoading()
                timerInterval = setInterval(function() {
                Swal.getContent().querySelector('strong')
                    .textContent = Swal.getTimerLeft()
                }, 100)
            },
            onClose: function() {
                clearInterval(timerInterval)
            }
            }).then(function(result) {
            if (
                // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.timer
            ) {
                console.log('Estaba cerrado por el temporizador')
            }
            })
        });

        //Ajax
        $('#ajax-alert').click(function () {
            Swal.fire({
                title: 'Submit your Github username',
                input: 'text',
                inputAttributes: {
                  autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Look up',
                showLoaderOnConfirm: true,
                preConfirm: function(login) {
                  return fetch('//api.github.com/users/+ login')
                    .then(function(response) {
                      if (!response.ok) {
                        throw new Error(response.statusText)
                      }
                      return response.json()
                    })
                    .catch(function(error) {
                      Swal.showValidationMessage(
                        "Request failed:" +error
                      )
                    })
                },
                allowOutsideClick: function() {return !Swal.isLoading()}
              }).then(function(result) {
                if (result.value) {
                  Swal.fire({
                    title: "result.value.login's avatar",
                    imageUrl: result.value.avatar_url
                  })
                }
              })
        });

        //chaining modal alert
        $('#chaining-alert').click(function () {
            Swal.mixin({
                input: 'text',
                confirmButtonText: 'Next &rarr;',
                showCancelButton: true,
                progressSteps: ['1', '2', '3']
              }).queue([
                {
                  title: 'Question 1',
                  text: 'Chaining swal2 modals is easy'
                },
                'Question 2',
                'Question 3'
              ]).then(function(result) {
                if (result.value) {
                  Swal.fire({
                    title: 'All done!',
                    html:
                      'Your answers: <pre><code>' +
                        JSON.stringify(result.value) +
                      '</code></pre>',
                    confirmButtonText: 'Lovely!'
                  })
                }
              })
        });

        //Danger
        $('#dynamic-alert').click(function () {
            var ipAPI = 'https://api.ipify.org?format=json'
            Swal.queue([{
                title: 'Tu IP pública',
                confirmButtonText: 'Mostrar mi IP pública',
                text:
                  'Tu IP pública será recibida' +
                  'via AJAX request',
                showLoaderOnConfirm: true,
                preConfirm: function() {
                  return fetch(ipAPI)
                    .then(function(response) {return response.json()})
                    .then(function(data) { Swal.insertQueueStep(data.ip)})
                    .catch(function() {
                      Swal.insertQueueStep({
                        type: 'Error',
                        title: 'Incapaz de obtener su público IP'
                      })
                    })
                }
              }])
        });

        $('#sa-mixin').click(function () {
          var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            onOpen: function(toast) {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })
          
          Toast.fire({
            icon: 'success',
            title: 'Iniciado sesión con Exito'
          })
        });
    },
        //init
        $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.SweetAlert.init()
    }(window.jQuery);