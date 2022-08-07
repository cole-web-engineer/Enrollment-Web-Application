<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Taal-NET Application</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/dope.png" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-34943685-5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-34943685-5');
    </script>


    <!-- Date Picker -->
    <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                dateFormat: 'dd/mm/yy',
                defaultDate: '01/01/2010',
                changeMonth: true,
                changeYear: true
            });

        });
    </script>
    <script>
        $( function() {
            var progressTimer,
                progressbar = $( "#progressbar" ),
                progressLabel = $( ".progress-label" ),
                dialogButtons = [{
                    text: "Cancel Download",
                    click: closeDownload
                }],
                dialog = $( "#dialog" ).dialog({
                    autoOpen: false,
                    closeOnEscape: false,
                    resizable: false,
                    buttons: dialogButtons,
                    open: function() {
                        progressTimer = setTimeout( progress, 2000 );
                    },
                    beforeClose: function() {
                        downloadButton.button( "option", {
                            disabled: false,
                            label: "Start Download"
                        });
                    }
                }),
                downloadButton = $( "#downloadButton" )
                    .button()
                    .on( "click", function() {
                        $( this ).button( "option", {
                            disabled: true,
                            label: "Downloading..."
                        });
                        dialog.dialog( "open" );
                    });

            progressbar.progressbar({
                value: false,
                change: function() {
                    progressLabel.text( "Submitting Application: " + progressbar.progressbar( "value" ) + "%" );
                },
                complete: function() {
                    progressLabel.text( "Complete!" );
                    dialog.dialog( "option", "buttons", [{
                        text: "Close",
                        click: closeDownload
                    }]);
                    $(".ui-dialog button").last().trigger( "focus" );
                }
            });

            function progress() {
                var val = progressbar.progressbar( "value" ) || 0;

                progressbar.progressbar( "value", val + Math.floor( Math.random() * 3 ) );

                if ( val <= 99 ) {
                    progressTimer = setTimeout( progress, 50 );
                }
            }

            function closeDownload() {
                clearTimeout( progressTimer );
                dialog
                    .dialog( "option", "buttons", dialogButtons )
                    .dialog( "close" );
                progressbar.progressbar( "value", false );
                progressLabel
                    .text( "Uploading Attachments..." );
                downloadButton.trigger( "focus" );
            }
        } );
    </script>
    <style>
        #progressbar {
            margin-top: 20px;
        }

        .progress-label {
            font-weight: bold;
            text-shadow: 1px 1px 0 #fff;
        }

        .ui-dialog-titlebar-close {
            display: none;
        }
    </style>
</head>