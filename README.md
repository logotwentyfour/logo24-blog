# The blog of Logo24

This site is a copy of Logo24.com, with some different template files.

    index.php is the main homepage, or blog index page
    single.php handles single posts
    archives.php handles categories listings

The navigation and logo “home” link are hardcoded in to direct to logo24.com pages.

## Room for optimisation

Ideally this site would re-use assets—images, css, js— from logo24.com. This is pretty easy, but a pain in the ass to maintain because the site is constantly in development, and the files are being minimised, concatenated and cached. So every change made to logo24.com means updating absolute URLs on blog.logo24.com. Which kinda sucks.

So, both sites have their own assets for now, and style.css should be identical on both sites. E.g. when working on the styles for logo24.com, when finished, that file should be deployed to blog.logo24.com as well. Not ideal, but fine for now.
