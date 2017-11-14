-- Insert value to Account Table
INSERT INTO ACCOUNT (USERNAME, PASSWORD, FIRST_NAME, LAST_NAME, FULL_NAME, EMAIL, ROLE) VALUES
    ('Admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Admin', 'Admin', 'tranvthanhson@gmail.com' ,1),
    ('thuong', '619170c4d559a0786a141d489d019e22', 'thuong', 'thuong', 'thuong thuong', 'hoaithuong14cntt@gmail.com', 2),
    ('hieu', '619170c4d559a0786a141d489d019e22', 'thuong', 'thuong', 'thuong thuong', 'sonvotu96@gmail.com', 3),
    ('ngan', '4df26b7d69a26516915261039bbb1cb6', 'thuong', 'thuong', 'thuong thuong', 'thuong@thuong', 3);

-- Insert value to Shop Table
INSERT INTO SHOP (SHOP_NAME, LAT, LNG, DATE_CREATED, PHONE, IMAGE, TIME_OPEN, TIME_CLOSE, STATUS, DISCOUNT, VIEW) VALUES
    ("THE COFFEE HOUSE", "16.0639116", "108.2127751", "2015-05-17", "01269736096", "");

-- Insert value to Feedback Table
INSERT INTO FEEDBACK (NAME, CONTENT, PHONE ,EMAIL) VALUES
    ('Trần Vũ Thanh Sơn', 'Giao diện như nồi', '0126736096', 'tranvthanhson@gmail.com'),
    ('Huỳnh Thị Hoài Thương', 'Giao diện như quần', '0126736096', 'hoaithuong14cntt@gmail.com'),
    ('Trần Quốc Đạt', 'Giao diện max tù', '0126736096', 'quocdat23894@gmail.com'),
    ('Vị khách lãng tử', 'Giao diện max chán', '0126736096', 'thattinhtutududaydien@gmail.com');

-- Insert value to Type Table
INSERT INTO TYPE (TYPE_NAME) VALUES ('cà phê');

-- Insert value to Shop Table
INSERT INTO SHOP (SHOP_NAME, LAT, LNG, DATE_CREATED, PHONE, TIME_OPEN, TIME_CLOSE, STATUS, DISCOUNT, VIEW, ADDRESS, DETAIL) VALUES
('demo','1','1','2017-10-9 16:10:56','01283412220','2017-10-9 16:10:56','2017-10-9 16:10:56',0,1,'default-avatar.png','322323','1');

