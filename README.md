# Class-Assignment---Authentication

For this authentication assignment, I have added the authentication layer where the page will authenticate the user to enter the website. This allows the user to see the website's content, which, from the [index.php](index.php) page, the user needs to key in their email and password.

![Screenshot 2024-04-16 220611](https://github.com/hyzo70/Class-Assignment---Authentication/assets/122088412/d5ed0e48-47ae-4437-a19a-7c6cfa8c272d)



After the user has been authenticated, they will be redirected to the [form.php](form.php) page, where they can complete the Student Details Form. Then I put the Defense-In-Depth protection and also sanitize the input with the regex function as I stated in [form.php](form.php) where I put the pattern of regex and also the field of filling the email and password is required as well. I have also added the regex function in [index.js](index.js) as it can protect against any SQL injection in server-side scripting.

![Screenshot 2024-04-16 125152](https://github.com/hyzo70/Class-Assignment---Authentication/assets/122088412/d590e390-f5dd-4727-873b-5b50453b6bc1)
![Screenshot 2024-04-16 125138](https://github.com/hyzo70/Class-Assignment---Authentication/assets/122088412/9387bb47-64ba-4b4a-893b-53c56f0073c1)



I have also hash the user password so nobody can guess the actual password. I have developed the hashing password in the [login.php](login.php) page, which will validate the hash password using the MD5 hashing technique.

![Screenshot 2024-04-16 222007](https://github.com/hyzo70/Class-Assignment---Authentication/assets/122088412/7dc0cd22-7862-4940-a083-3ef5bd7593da)

