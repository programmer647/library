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

Done
Add reserve id
add date due to loan page
add loanid
way to loan books
add a boolean value to the loan table to see if it is overdue or not



Currently doing:
finish search page - copy the code from the tutorial on the website


fix why the collect page isn't transferring to the loan page correctly
finish the loanfromcollect page so that collected books can be loaned


1. finish collect page by making the drop down menu that shows the username, book title, book author and sends the right data to the loan page
figure out how to do it that when collecting books it shows the title of the book and the author, as well as the user's name instead of just their user id

2. search mechanism on browsebooks page - do it by title, author. for now do this so that it redirects you onto another page where the results are but later change this so it does it on the page. have a radio button to select what to search by

3. finish overdue books page 



Next steps:
write checkoverdue page that will run every time an admin logs onto the website
create a table for authors so that there isn't repeated data in tblbooks. make it update automatically when adding books so that you don't have to add authors 
see if the username can be the primary key if a method is put in to ensure there are no repeated usernames
better way to loan books eg searching by book and user
make way to validate items for loan eg check if they are in the books and users table
way for admin to view overdue books
way for admin to view all books currently out of the library
make it so that collecting a book removes it from the reserve table


add copies and on_loan to books database then do that if it isn't in the library you can't loan it. also add to the reserves page that you can be notified when it comes back into the library


add headers to all pages to redirect if either not logged in or don't have the right role to access a page
remove printing arrays at the beginning of pages


Notes:
make it so you can't reserve/loan unless a book is in the library


other things I could add
make a way to alert a user when a book they want is back in 

stuff to ask for help on:
SQL statement in collectfromreserve page