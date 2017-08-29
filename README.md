Straight North
v.01

This is a helper plugin for the Straight North development team.
Since local installs of the Wordpress are running in a multisite
configuration, this plugin sets directory values for javascrtipt
asstes.

This plugin solves this by finding the wp plugin directory and
assigning it an object you can call in js directly.  An example
would be a js script has an ajax call:

```
 var sendData = $.ajax({
               type: 'POST',
               url: snVars.sn_path+'/mapgroove/assets/ajax/map_data.php',
               data: {save_map},
                 success: function(resultData) {
                     $('.datamapping').html(resultData);
                 }
             });
```



@michalsen for questions
