<html lang="en">
<head>
    <title><?= lang('appointment_details_title') ?> | Easy!Appointments</title>
</head>
<body style="font: 13px arial, helvetica, tahoma;">
<div class="email-container" style="width: 650px; border: 1px solid #eee;">
    <div id="header" style="background-color: #429a82; height: 45px; padding: 10px 15px;">
        <strong id="logo" style="color: white; font-size: 20px; margin-top: 10px; display: inline-block">
            <?= $company_name ?>
        </strong>
    </div>

    <div id="content" style="padding: 10px 15px;">
        <h2><?= $email_title ?></h2>
        <p><?= $email_message ?></p>

        <h2><?= lang('appointment_details_title') ?></h2>
        <table id="appointment-details">
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('service') ?></td>
                <td style="padding: 3px;"><?= $appointment_service ?></td>
            </tr>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?php if ($appointment_service == 'Teremfoglalás / Room reservation') print lang('provider_room'); else print lang('provider_subject'); ?></td>
                <td style="padding: 3px;"><?= $appointment_provider ?></td>
            </tr>
            <?php if($appointment_service !='Teremfoglalás / Room reservation') : ?>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('select_servicemode') ?></td>
                <td style="padding: 3px;"><?= $customer_select_servicemode ?></td>
            </tr>

            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('select_servicemodeoptions') ?></td>
                <td style="padding: 3px;"><?= $customer_select_servicemodeoptions ?></td>
            </tr>
            <?php endif; ?>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('start') ?></td>
                <td style="padding: 3px;"><?= $appointment_start_date ?></td>
            </tr>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('end') ?></td>
                <td style="padding: 3px;"><?= $appointment_end_date ?></td>
            </tr>
        </table>

        <h2><?= lang('customer_details_title') ?></h2>
        <table id="customer-details">
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('name') ?></td>
                <td style="padding: 3px;"><?= $customer_name ?></td>
            </tr>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('email') ?></td>
                <td style="padding: 3px;"><?= $customer_email ?></td>
            </tr>
            <?php if($appointment_service =='Teremfoglalás / Room reservation') : ?>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('readers_card') ?></td>
                <td style="padding: 3px;"><?= $customer_readers_card ?></td>
            </tr>
            <?php endif; ?>
            <?php if($appointment_service =='Publikációmenedzsment/ Publication management') : ?>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('organization') ?></td>
                <td style="padding: 3px;"><?php if ($customer_organization) print $customer_organization; else print "-"; ?></td>
            </tr>

            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('user') ?></td>
                <td style="padding: 3px;"><?php if ($customer_user) print $customer_user; else print "-"; ?></td>
            </tr>
            <?php endif; ?>
            <?php if($appointment_service !='Teremfoglalás / Room reservation') : ?>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('questions') ?></td>
                <td style="padding: 3px;"><?php if ($customer_questions !='') print $customer_questions; else print "-"; ?></td>
            </tr>
            <?php endif; ?>
            <?php if($appointment_service =='Teremfoglalás / Room reservation') : ?>
             <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('reservation') ?></td>
                <td style="padding: 3px;"><?php if ($customer_reservation !='') print $customer_reservation; else print "-"; ?></td>

            </tr>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('notes') ?></td>
                <td style="padding: 3px;"><?php if ($customer_notes !='') print $customer_notes; else print "-"; ?></td>
            </tr>
            <?php endif; ?>
        </table>
    </div>

    <div id="footer" style="padding: 10px; text-align: center; margin-top: 10px;
                border-top: 1px solid #EEE; background: #FAFAFA;">
        |
        <a href="<?= $company_link ?>" style="text-decoration: none;"><?= $company_name ?></a>
    </div>
</div>
</body>
</html>
