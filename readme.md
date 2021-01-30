HOW TO USE:-
1. Import database from folder mFolks/Database/mfolks.sql from downloaded files.
2. Move all the folder from inside mFolks folder to C:\xampp\htdocs (for XAMP).(or your server folder).
3. TO open user login and registration on browser http://localhost/user/login/ and http://localhost/user/registration/ respectively.
4. TO open vendor login and registration on brower http://localhost/vendor/login/ and http://localhost/vendor/registration/ respectively.

USER PANEL:-
A) Registration-
    1. User need to enter the non-existing username and any password according to user choice.
    2. If user enters the existing username then the error will appear{user already exist's}. if not then data will be stored and the user will redirected to login page.
    3. The password entered by the user will get encrypted to access.

B) Login-
    1. User have to enter registered username and passsword to login.
    2. If non-existing user try to access the error will appear(user alerady exist). And if User access's with correct username and incorrect password then the error will appear(invalid credentials). if not then the user will get success responce to login.
    3. The password entered by user to login will get encrypted with same encryption algorithm as used in registration of that user for verification on the time of login. 



VENDOR PANNEL:-
A) Registration-
    1. Vendor need to enter the non-existing mobile number and any password according to Vendor choice.
    2. If Vendor enters the existing mobile number then the error will appear{Vendor already exist's}. if not then data will be stored and the Vendor will redirected to login page.
    3. The password entered by the Vendor will get encrypted to access.

B) Login-
    1. Vendor have to enter registered mobile number and passsword to login.
    2. If non-existing Vendor try to access the error will appear(Vendor alerady exist). And if Vendor access's with correct mobile number and incorrect password then the error will appear(invalid credentials). if not then the Vendor will get success responce to login and list for the shopkeeper will get visible.
    3. The password entered by Vendor to login will get encrypted with same encryption algorithm as used in registration of that Vendor for verification on the time of login.