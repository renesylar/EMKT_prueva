function redirect() {


                        alertify.success('Redireccionado...');
                        setInterval(function () {
                            window.location = "../Controllers/RedirectionController.php"
                        }, 1000);

                    }