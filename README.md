# How-to-create-a-phishing-page
Phishing is an attemp to obtain sensitive information often for malicoius reasons by disguising as a trustworthy entity. Here I have used eBay as for the demonstration.  
To read more go to [secbubble.wordpress.com](https://secbubble.wordpress.com/2017/03/20/phishing-attacks/)  

## Getting Started  
- Download the project and unzip it.  
- Inside the project, you'll find a zipped folder named "Sign in or Register _ eBay_files", unzip it too.  
- All the resources (other than .php .html and dir.txt) should be in "Sign in or Register _ eBay_files" folder, NOT INSIDE SUBFOLDER IN "Sign in or Register _ eBay_files".  
- Now host those files locally in a web server like Apache.  
- After hosting files, go to the web browser and ask for index.php (It will load the Login page)  
- When you enter some test credentials and press "Sign In", it will redirect you to the original page and entered credentials should be saved in the "dir.txt"   

## Built With  
PHP and HTML
