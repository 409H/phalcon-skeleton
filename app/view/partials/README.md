## app/view/partials

* This directory will hold partial views so that they can be called whenever and we only need to configure 1 file.

When we call a partial file, we only need to reference the name of the partial file (not the path) as we have set this in [/app/config/services.php](https://github.com/409H/phalcon-skeleton/blob/master/app/config/services.php#L22) using `setPartialsDir()`.