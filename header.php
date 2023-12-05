<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles.css">
   <title>Your Title Here</title>
   <style>
      /* Your CSS styles here */
      .tagline 
{
    font-size: 10px;
    line-height: 30px;
    font-weight: bold;
    letter-spacing: 1px;
}
.logo-text 
{
    text-align: center;
    margin-top: -5px;
    font-size: 48px;
    font-weight: bold;
    letter-spacing: 4px;
}
.big-e
{
  font-size: inherit;
  font-weight: inherit;
}
.small-worxs
{
font-size: 38px;
}
   </style>
</head>
<body>
   <div class="section is--nav w-nav" role="banner" data-collapse="medium" data-animation="default" data-duration="400" data-no-scroll="1" data-easing="ease" data-easing2="ease">
      <div class="container-2 is--nav">
         <a href="index.php" aria-current="page" class="logo w-inline-block w--current">
            <div class="logo-text"><span class="big-e">E</span><span class="small-worxs">worxs</span></div>
         </a>
         <div class="nav-menu">
            <a href="selfemployed.php" aria-current="page" class="nav-link w-inline-block w--current">
               <div class="nav-link_text">Self Employed</div>
            </a>
            <a href="teams.php" class="nav-link w-inline-block">
               <div class="nav-link_text">Teams</div>
            </a>
            <a href="pricing.php" class="nav-link w-inline-block">
               <div class="nav-link_text">Pricing</div>
            </a>
            <a href="faq.php" class="nav-link w-inline-block">
               <div class="nav-link_text">FAQ</div>
            </a>
         </div>
         <a href="#" class="menu-icon-wrapper is--hamburger-open w-inline-block">
            <div class="close-overlay is--hamburger-close"></div>
            <div class="menu-line is--upper"></div>
            <div class="menu-line is--lower"></div>
         </a>
         <div class="nav-buttons">
            <a href="https://eworxs.app/EworxsAdmin/admin_login.php" class="nav-button is--indigo-extra-light w-inline-block">
               <div>Sign in</div>
            </a>
            <?php

           

             if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            {
                $linkdomain = "https";
            }
            else
            {
             $linkdomain = "http";
            }
            $linkdomain .= "://";
            $linkdomain .= $_SERVER['HTTP_HOST'];

            // echo $link;
               $currentURL = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
               // if ($currentURL == $link || $currentURL == $link || $currentURL == $link || $currentURL == $link) {


               if ($currentURL == $linkdomain."/privacy.php" || $currentURL == $linkdomain."/terms.php" || $currentURL == $linkdomain."/faq.php" || $currentURL == $linkdomain."/about.php"){
            ?>
               <a href="<?php echo $linkdomain;?>/index.php#pricing" class="nav-button is--indigo w-inline-block">
                  <div>Sign Up</div>
               </a>
            <?php } else { ?>
               <a href="#pricing" class="nav-button is--indigo w-inline-block">
                  <div>Sign Up</div>
               </a>
            <?php } ?>
         </div>
      </div>
      <div class="overlay-menu">
         <div class="overlay-links">
            <a href="selfemployed.php" aria-current="page" class="overlay-menu-link is--hamburger-close w-inline-block w--current">
               <div>Self Employed</div>
            </a>
            <a href="teams.php" class="overlay-menu-link is--hamburger-close w-inline-block">
               <div>Teams</div>
            </a>
            <a href="pricing.php" class="overlay-menu-link is--hamburger-close w-inline-block">
               <div>Pricing</div>
            </a>
            <a href="faq.php" class="overlay-menu-link is--hamburger-close w-inline-block">
               <div>FAQ</div>
            </a>
         </div>
         <div class="is--hamburger-open"></div>
         <div class="overlay-buttons">
            <a href="https://eworxs.app/EworxsAdmin/admin_login.php" target="_blank" class="nav-button is--indigo is--overlay w-inline-block">
               <div>Sign in</div>
            </a>
            <a href="#pricing" target="_blank" class="nav-button is--indigo-light w-inline-block">
               <div>Sign Up</div>
            </a>
         </div>
      </div>
      <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
   </div>
</body>
</html>
