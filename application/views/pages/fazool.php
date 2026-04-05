CREATE TABLE tbl_blogs (
    blog_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) DEFAULT NULL
    category VARCHAR(100) DEFAULT NULL,
    tags TEXT DEFAULT NULL,
    author VARCHAR(100) DEFAULT NULL,
    short_desc TEXT DEFAULT NULL,
    content LONGTEXT DEFAULT NULL
);

CREATE TABLE tbl_blog_images (
    blog_media_id INT AUTO_INCREMENT PRIMARY KEY,
    blog_id INT DEFAULT NULL,
    media_file_name VARCHAR(100) DEFAULT NULL,
    media_file_path VARCHAR(255) DEFAULT NULL
);