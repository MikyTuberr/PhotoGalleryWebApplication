# Photo Gallery Web Application

## Overview
This web application is designed to provide users with an interactive photo gallery experience. It is developed using PHP for the server-side scripting and MongoDB as the NoSQL database. The application includes features such as user registration, login, and a photo gallery with paging capabilities.

## Features

1. **User Registration and Login**
   - **Registration:** New users can create an account by providing a username, email, and password. The passwords are securely hashed before being stored in the MongoDB database.
   - **Login:** Registered users can log in using their credentials. Upon successful login, users are redirected to their personalized dashboard.

2. **Photo Gallery**
   - **Image Upload:** Logged-in users can upload their photos to the gallery. Each photo is stored with metadata such as the upload date, user ID, and description.
   - **Paging:** The photo gallery supports paging to enhance user experience. Users can navigate through pages of photos, ensuring the gallery is organized and loads efficiently.
   - **Viewing Images:** Each image in the gallery can be viewed in full size along with its details. Users can comment on and like photos.

3. **Database Management**
   - **MongoDB Integration:** MongoDB is used to store user data, including login credentials and metadata for the photos. Its flexible schema design allows for easy storage and retrieval of hierarchical data.
   - **Efficient Queries:** MongoDB’s powerful query capabilities enable efficient data retrieval, which is crucial for implementing features like paging in the photo gallery.

## Technical Details

- **Backend:** The server-side logic is implemented in PHP, handling user authentication, image uploads, and data interactions with MongoDB.
- **Database:** MongoDB stores user information and photo metadata. GridFS, a specification for storing and retrieving files in MongoDB, is used for handling image files.
- **User Interface:** The front end of the application is built using HTML, CSS, and JavaScript, ensuring a responsive and user-friendly interface.
- **Paging Mechanism:** The paging functionality is implemented by querying MongoDB with limits and skips, allowing users to browse through the gallery smoothly.

## Security Measures

- **Password Hashing:** User passwords are hashed using a strong algorithm (such as bcrypt) to ensure security.
- **Data Validation:** Both client-side and server-side validation are implemented to ensure the integrity of user inputs.
- **Session Management:** Secure session management practices are followed to protect user sessions and prevent unauthorized access.

## Conclusion

This web application demonstrates a robust combination of PHP and MongoDB to create a dynamic and user-friendly photo gallery. The features such as user registration, login, image uploads, and paging provide a comprehensive platform for users to manage and share their photos efficiently.
