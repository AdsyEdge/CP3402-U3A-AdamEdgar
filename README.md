# README

This is the ReadMe file for the TwentyTwentyOne-Child theme, designed for U3A.

## Theme Development
The child theme of TwentyTwentyOne was created to be primarily used by University of The Third Age (U3A), but is not hard-coded, so that it can be used in any environment.
The main changes that this child-theme contributes is stylisation of the Header & Footer, custom font, an increased font size for those that suffer from vision impairments, and padding and spacing to comfortably nestle the content within the page.
The chosen colour scheme for the site is a 3-tone colour palette (Light/Normal/Dark), with a white background. These colour's hexcodes are #DEF2FF, #015AB9, and #00438B. This chosen colour scheme was to match U3A's existing logo and content.

Further changes that could be made could be to introduce some yellow highlights, to contrast with U3A's logo. It's currently a single colour, with 3 varying shades; adding a second colour could overpower the palette, so it would need to be done in moderation.
There could also have some changes to the margins, for the site-main content. It's up to personal preference on how wide you'd desire the page to be.


## Deployment
### Local Environment
For this repository to work, you'll need to have the 'Local' branch selected. You'll then need to clone or pull the repository to where your wordpress directory is located, then into /wp-content/themes. This'll create 3 new folders. One with the standalone parent theme (twentytwentyone, this is unchanged to the pre-existing twentytwentyone theme) and one with the new child theme (twentytwentyone-child).
There's a folder with a workflow file, that has an automatic process that runs when a push is received into the repository. It's named 'deploy.yaml' and it takes all the files in the 'local' branch and pushes it to the deployment site (Which is currently configured for DigitalOcean. There's a SSH Key and other details in the repository's settings that pre-configured).

### Testing
For any and all changes made to the theme, I highly recommend doing it through LindsayMarkWard's WP-Distillery VM. It's pre-configured to run locally, and only needs a few settings modified to get it up and running for testing and local editing.
It's recommended to use Visual Studio Code for editing any of the files within the child theme.

### Deploying
For deploying the theme, you'll only need to commit and push your changes (via GIT) to the 'local' branch of the repo.
After this, the deploy.yaml code will detect the push and operate these changes:
 - SSH into DigitalOcean's VM with the details provided in the repo's settings.
 - navigates into /var/www/html/wp-content/themes (This is where wordpress's theme folder is located in the environment)
 - git pull's the 'local' branch of the repository.
 - echo's back that deployment was successful.

## U3A Specific

### U3A Specific - Classes
For creating new classes for the site, you'll need to go to the posts tab and 'add new'.
You then select in the far-right menu, the category U3A Classes, then the category for whether it's in Magnetic Island or Townsville, then a category for what day (Monday - Townsville).
You then can fill in your details for the class. Once this is done, and you've published the event, change the 'published on' date and time to Jul 19th, 2023, and to the time that the class is starting.

### U3A Specific - Registrations
To check if anyone has registered on the website, navigate to Wordpress's dashboard, and then click on Forminator on the far left, then click on submissions. Any and all submissions will be in this area.

### U3A Specific - Photos
To add any new photos, navigate to Wordpress's dashboard, and then Photo Gallery. Hover over the already created gallery, name 'Photo Gallery' and click edit. From there, click on 'Import from Media Library' and then upload any new photos you want added.

### U3A Specific - Newsletters
To add any new newsletters, you'll have to first disable "Classic Editor" in the plugins. Then, you can upload them to 'media'. Once that's done, navigate to 'pages' and then edit the 'Newsletter' page. Add in your Newsletter file by typing in '/files' for the files block to be added in. Then, choose your newly added newsletter to include to the page. Once you're done, go ahead and re-enable "Classic Editor" in the plugins.