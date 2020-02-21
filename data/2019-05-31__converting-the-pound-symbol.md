Snippet for using the GBP symbol in areas where its not supported

--PAGE--

Had a task where I needed to add the GBP symbol £ to a pdf which is built up using FPDF. 
Since FPDF does not support UTF8 encoding, it would not render the GBP (£) character;

The fix for this is to convert the character first.

    iconv("UTF-8", "ISO-8859-1", "£");
--DATA--{"category":"snippet"}
