# cesapp

SQL Create file is located in the _sql folder in root. 

Techical consideration: Birthday is being stored as MySQL datetime, but in practice should be converted to date.

Deployment considerations:
- DB connection string should be updated
- Base URL and index page should be updated 
- Config (index page and .htaccess) was at one point modified for GoDaddy hosting. This may need to be modified depending on your host
