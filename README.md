#Get Facebook ID Service
# Using API from https://getfbid.com to get Facebook ID 
#### Any type of Facebook Url , working with username only ( /facebook ) ,... Just needs copy and paste .
#### Ex:
<li>https://getfbid.com/api/?url=https://www.facebook.com/httzip =>User type</li> 
<li>https://getfbid.com/api/?url=https://www.facebook.com/facebook =>Fanpage type</li> 
<li>https://getfbid.com/api/?url=https://www.facebook.com/groups/j2team.community =>Group type</li> 
<hr>
JSON result:
<pre lang="php">
{
  "error": "[CODE]", // 0 - success 1- fail 
  "id": "[ID]", // ID from Facebook
  "name": "[NAME]", // Name of profile
  "img": "[LINK]" // Image source
}
</pre>
