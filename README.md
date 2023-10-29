# Social Media Site

This is a social media site built using PHP and MySQL. The site allows users to send and accept friend requests, and has a login algorithm with coding. SQL injection prevention is implemented, and data is encrypted with MD5. Data organization is performed to ensure efficient retrieval of information.

## Features

- User registration
- Login and logout
- Friend request send/accept
- User profile management
- Posting status updates
- Commenting on status updates
- Liking status updates

## Installation

1. Clone the repository.
2. Import the database schema from `database.sql`.
3. Configure the database connection in `config.php`.
4. Start the server.

## Security

SQL injection prevention is implemented by using prepared statements. Passwords are encrypted with MD5 before being stored in the database.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
