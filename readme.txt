/***************************************/
/*  Create .env file with the content  */
/***************************************/
MYSQL_HOST=mysql
MYSQL_DATABASE=calibrate_db
MYSQL_USER=drupal_user
MYSQL_PASSWORD=drupal_password
MYSQL_ROOT_PASSWORD=root_password

DRUPAL_USER=drupal_admin
DRUPAL_PASSWORD=drupal_password
/***************************************/

/***************************************/
- Build the containers: docker compose up -d --build
/***************************************/

/***************************************/
/*    Create the link to html folder 	 */
/***************************************/
ln -s /opt/drupal/calibrate/web /var/www/html
/***************************************/

/***************************************/
If needed steps to build the CSS:
/***************************************/
- npm install -g node-sass

Go to folder /opt/drupal/calibrate/web/themes/custom/calibrate to run the build
- npm run build-css
/***************************************/