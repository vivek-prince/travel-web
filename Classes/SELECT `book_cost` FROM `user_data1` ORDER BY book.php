SELECT `book_cost` FROM `user_data1` ORDER BY book_cost DESC LIMIT 1,1

SELECT book_cost FROM (SELECT book_cost FROM user_data1 ORDER BY book_cost DESC LIMIT 2) AS user ORDER BY book_cost LIMIT 1 