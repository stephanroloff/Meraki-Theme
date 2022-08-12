# Meraki-Theme

Hot Reload

1 - Add the next line of code in scripts in package.json (already aded here):

"start:hot": "wp-scripts start --hot",

2 - Add the next line of code in wp-config.php 

define( 'SCRIPT_DEBUG', true );

3 - To activate it:

npm run start:hot

4 - That's it!
