
<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>New Subscriber</title>
    <meta name="description" content="Reset Password Email Template.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <style type="text/css">
        a:hover {text-decoration: none !important;}
        font-family:{'Montserrat', sans-serif;}
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <!--100% body table-->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css2?family=Montserrat&display=swap); font-family:'Montserrat', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                          <a href="https://oneonco.co.id" title="logo" target="_blank">
                            <img width="160" src="{{ asset('/images/logo_oneonco_black.png') }}" title="logo" alt="logo">
                          </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding:0 35px;">
                                        <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;"> Selamat Bergabung di One Onco, {{ $emailSubscriber }}</h1>
                                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">Sebagai member newsletter One Onco, kamu akan mendapatkan informasi terkini seputar kanker dan manejemennya. Dengan informasi tersebut kamu dapat mengerti lebih dalam tenang kanker dan cara menjalani hidup secara maksimal. Tanpa lama lagi, mari kita mulai hidup yang lebih sehat.</p>
                                        <a href="{{ URL::to('/') }}"  style="background:#207be2;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;">Mulai Membaca</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:80px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table bgcolor="#ffffff" class="es-header-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                                                        <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="194" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="width: 100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="174" class="es-m-p0r es-m-p20b esd-container-frame" align="center">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="width:33.33%; text-align: center; padding:0 20px;" align="left" class="esd-block-text">
                                                                                        <a href="{{ URL::to('/deteksi-kanker') }}" style="text-decoration: none">
                                                                                            <img style="text-align: center;object-fit:contain; width:50px;"src="{{asset('/images/deteksidini.png')}}" alt="">
                                                                                            <h3 style="color: #80bc41; text-align:center;margin-top:10px;margin-bottom:5px;font-size:14px;"><strong>Deteksi Dini Kanker</strong></h3>
                                                                                            <p style="font-size: 10px; color:black;margin-top:5px;">Beli langsung suplemen dan nutrisi di sini.</p>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td style="width:33.33%; text-align: center; padding:0 20px;" align="left" class="esd-block-text" >
                                                                                        <a href="{{ URL::to('/belanja-sehat') }}" style="text-decoration: none">
                                                                                            <img style="text-align: center;object-fit:contain; width:50px;"src="{{asset('/images/beliobat.png')}}" alt="">
                                                                                            <h3 style="color: #00A2E3; text-align:center;margin-top:10px;margin-bottom:5px;font-size:14px;"><strong>Belanja Sehat</strong></h3>
                                                                                            <p style="font-size: 10px; color:black;margin-top:5px;">Cari tes skrining untuk pendeteksian dini.</p>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td style="width:33.33%;text-align:center; padding:0 20px;" align="left" class="esd-block-text">
                                                                                        <a href="{{ URL::to('/konsultasi-online') }}" style="text-decoration: none">
                                                                                            <img style="text-align: center;object-fit:contain; width:50px;"src="{{asset('/images/live-chat.png')}}" alt="">
                                                                                            <h3 style="color: #C6CB57; text-align:center;margin-top:10px;margin-bottom:5px;font-size:14px;"><strong>Konsultasi Online</strong></h3>
                                                                                            <p style="font-size: 10px; color:black;margin-top:5px;">Konsultasi online dengan dokter seputar kanker.</p>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="height:40px;">&nbsp;</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>www.oneonco.co.id</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--/100% body table-->
</body>

</html>


