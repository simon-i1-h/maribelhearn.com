<!DOCTYPE html>
<html id='top' lang='en'>
<?php
    include 'assets/shared/shared.php';
    hit(basename(__FILE__));
	$page = str_replace('.php', '', basename(__FILE__));
?>

    <head>
		<title>Privacy Policy - Maribel Hearn's Touhou Portal</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width'>
        <link rel='preload' type='font/woff2' href='assets/fonts/Felipa-Regular.woff2' as='font' crossorigin>
        <link rel='stylesheet' type='text/css' href='assets/shared/css_concat.php?page=index'>
		<link rel='icon' type='image/x-icon' href='favicon.ico'>
        <script src='assets/shared/js_concat.php' defer></script>
        <?php echo dark_theme() ?>
    </head>

    <body>
        <nav>
            <div id='nav' class='wrap'><?php echo navbar($page) ?></div>
        </nav>
        <main>
            <div id='wrap' class='wrap'>
                <p id='ack'>This background image<br id='ack_br'>
                was drawn by <a href='https://www.pixiv.net/member.php?id=420928'>LM7</a></p>
                <span id='hy_container'><span id='hy'></span>
                    <span id='hy_tooltip' class='tooltip'><?php echo theme_name() ?></span>
                </span>
                <h1>Privacy Policy</h1>
    			<?php
    				if (!empty($_GET['redirect'])) {
    					echo '<p>(Redirected from <em>' . htmlentities($_GET['redirect']) . '</em>)</p>';
    				}
    			?>
                <p class='wide'><strong>Effective date:</strong> 16 December 2019</p>
                <p>Maribel Hearn's Touhou Portal ("us", "we", or "our") operates the maribelhearn.com
                website (hereinafter referred to as the "Service").</p>
                <p>This page informs you of our policies regarding the collection, use,
                and disclosure of personal data when you use our Service and the choices you have associated with that data.
                The Privacy Policy  for Maribel Hearn's Touhou Portal has been created with the help of
                <a href='https://www.termsfeed.com/privacy-policy-generator/'>Privacy Policy Generator</a>.</p>
                <p>We use your data to provide and improve the Service. By using the Service,
                you agree to the collection and use of information in accordance with this policy.</p>

                <h2>Definitions</h2>
                <p><strong>Service</strong></p>
                <p>Service is the maribelhearn.com website operated by Maribel Hearn's Touhou Portal</p>
                <p><strong>Personal Data</strong></p>
                <p>Personal Data means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).</p>
                <p><strong>Usage Data</strong></p>
                <p>Usage Data is data collected automatically either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p>
                <p><strong>Cookies</strong></p>
                <p>Cookies are small files stored on your device (computer or mobile device).</p>

                <h2>Information Collection and Use</h2>
                <p>We do <strong>not</strong> collect any type of information on users.</p>

                <h3>Types of Data Collected</h3>

                <h4>Personal Data</h4>
                <p>While using our Service, we will <strong>not</strong> ask you to provide us with certain personally identifiable information that can be used to contact or identify you ("Personal Data").</p>

                <h4>Tracking & Cookies Data</h4>
                <p>We do <strong>not</strong> use cookies or similar tracking technologies to track the activity on our Service.</p>

                <h2>Security of Data</h2>
                <p>The security of your data is important to us, but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>

                <h2>Links to Other Sites</h2>
                <p>Our Service may contain links to other sites that are not operated by us. If you click a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.</p>
                <p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>

                <h2>Children's Privacy</h2>
                <p>Our Service does <strong>not</strong> address anyone under the age of 18 ("Children").</p>
                <p>We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Child has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our server.</p>

                <h2>Changes to This Privacy Policy</h2>
                <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
                <p>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the "effective date" at the top of this Privacy Policy.</p>
                <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>

                <h2>Contact Us</h2>
                <p>If you have any questions about this Privacy Policy, please contact us:</p>
                <ul>
                    <li>By email: maribelhearn42@gmail.com</li>
                </ul>

                <p class='wide-top'><strong><a href='#top'>Back to Top</a></strong></p>
            </div>
        </main>
    </body>

</html>
