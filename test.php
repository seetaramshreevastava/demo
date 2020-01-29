1. Julius provide the slack cridential for a property based trial for salseforce apex.  And core package includes everything you'd find in a typical force.com package, namely cusotm objects apex triggers, Visualforce pages and some lighting components and also.
2. You'll find a bunch of static resource, which include the react components and its also includes our routing framework, which is an interface to our react components.
3. Core package is connected to a bunch of external microservices, most of them run on ROR, some run on playing ROR framework sinatra, and almost all of them are hosted on heroku.
4. In contacts or Leads listing. We have a bunch of fields here on the contact layout. You also have some components on this layout here that you wouldn't see in a normal non property base.
5. SMS Conversation: that is a cusotm component that we've build, which allow our customers to send a sms in this version. 
6. Listing and properties listing is like a property that you put on the market in order to sell it. 
7. Listing media gallery - working with them in a very csutomizable way. This is a custom components.
8. PBA - Most of the customer-facing UI components are written in React, embedded in Visualforce pages
9. Package Pipeline - A. React team will build these components and create a react bundle then test locally, and then at some point when they are ready for releasing they will trigger, travis release build, travis is the continuous intgration tool. This will automatically bulid react bundle and include into our package. once its create a react bundle then go to the core package and make sure that everything is included there as well, maybe new apex class, objects, fields. And once everything is on our master main branch. We will also trigger a release build there. Which will alse run through travis, then automatically download the react build and diploy onto our package  and release the new version of package.


15. new test point


