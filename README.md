# Delete all your Wordpress users except administrator
Use this script at your own risk

## I just want the SQL-queries
Here you go!
```sql
DELETE wu FROM `wp_users` wu INNER JOIN wp_usermeta ON wu.ID = wp_usermeta.user_id WHERE meta_key = 'wp_capabilities' AND meta_value NOT LIKE '%administrator%'
```
