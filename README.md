# library


pages to make 
login page
home page
browse books


Page needs to 
- add books
- add people
- search books by title
- search books by author
- "borrow" book
- admin reports- overdue books - who has borrowed what
- anything else you think might be useful


tables I will need
tblusers (userID,username,surname,forename,password,role) (role will be either admin or user but add teacher as well as they might be able to borrow different books, or create reading lists for pupils)
tblbooks (bookID,title,author first name, author surname) (possibly add other fields like genres later on)



Currently doing:
Collect books page so that students can collect books they have reserved - this is currently showing an error - ask cunniffe for help - adding a reserve id might fix the problem so do that first
add reserve id so there is a primary key



Next steps:
way to loan books
create a table for authors so that there isn't repeated data in tblbooks. make it update automatically when adding books so that you don't have to add authors 


Notes:
make it so you can't reserve unless a book is in the library


other things I could add
make a way to alert a user when a book they want is back in 