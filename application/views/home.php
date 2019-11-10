<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Test shortener for %company_name</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Custom CSS for basic styling -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />

        <!-- Optional CSS for individual theming (powered by Bootswatch - https://bootswatch.com/) -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flatly.css" />
        <!-- Бесплатная флат тема на бутстрапе по желанию заменить на любую интересующую -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        </head>
    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CodeIgniter URL-Shortener for Service-group</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo base_url(); ?>">Домой</a></li>
                    <li><a href="#about">О</a></li>
                    <li><a href="#contact">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="intro">
            <h1>Сокращатель ссылок </h1>
            <p class="lead">
                Рыбатекст - является важным атрибутом и инструментом любого вебмастера <br/>
                Разнообразный и богатый опыт постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития. <br/>Равным образом дальнейшее развитие различных форм деятельности играет важную роль в формировании направлений прогрессивного развития. Товарищи! начало повседневной работы по формированию позиции требуют от нас анализа соответствующий условий активизации. Значимость этих проблем настолько очевидна, что рамки и место обучения кадров требуют от нас анализа систем массового участия.
            </p>
        </div>

        <?php echo form_open(); ?>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="input-group">
                        <input type="url" name="url" class="form-control" placeholder="Enter your URL here..." autocomplete="off" />
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Щелк!</button>
                        </span>
                    </div>

                    <?php if ($error): ?>
                    <p class="text-danger"><?php echo $error; ?></p>
                    <?php endif;?>
                </div>
            </div>
        <?php echo form_close(); ?>

        <?php if ($show_details): ?>
        <div class="well url_data">
            <h2>Ваша ссылка:</h2>

            <div class="input-group">
                <input type="text" value="<?php echo base_url($url_data->alias); ?>" class="form-control input-lg" readonly="readonly" />
                <span class="input-group-btn">
                    <a href="<?php echo base_url($url_data->alias); ?>" class="btn btn-default btn-lg" target="_blank">
                        <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
                    </a>
                </span>
            </div>

            <p>&nbsp;</p>
            <p>Статистика по вашей ссылке: <a href="<?php echo base_url($url_data->alias . '/stats'); ?>" target="_blank"><?php echo base_url($url_data->alias . '/stats'); ?></a></p>

        </div>
        <?php endif;?>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
    </html>