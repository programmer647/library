# library



Page needs to 
- add books
- add people
- search books by title
- search books by author
- "borrow" book
- admin reports- overdue books - who has borrowed what
- anything else you think might be useful



Done
Add reserve id
add date due to loan page
add loanid
way to loan books
add a boolean value to the loan table to see if it is overdue or not
finish search page
finish overdue books page 
write checkoverdue page


Currently doing:
return books page



Next steps:


create a table for authors so that there isn't repeated data in tblbooks. make it update automatically when adding books so that you don't have to add authors 
see if the username can be the primary key if a method is put in to ensure there are no repeated usernames
better way to loan books eg searching by book and user
make way to validate items for loan eg check if they are in the books and users table
way for admin to view all books currently out of the library
make it so that collecting a book removes it from the reserve table
improve search mechanism
improve overdue page so that it shows the book title and the name of the person who it is on loan to


add copies and on_loan to books database then do that if it isn't in the library you can't loan it. also add to the reserves page that you can be notified when it comes back into the library


add headers to all pages to redirect if either not logged in or don't have the right role to access a page
remove printing arrays at the beginning of pages


Notes:
make it so you can't reserve/loan unless a book is in the library


other things I could add
make a way to alert a user when a book they want is back in 
email reminders to people to return their books

stuff to ask for help on:
