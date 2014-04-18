Test these items every time you push a new version of the site to the server:

GLOBAL
- Nav tabs underlined correctly
- Link to shopping cart is valid
- Shopping cart is properly branded
- All nav links and home link work
- All nav and home links should link to clean URLs
- Check that config file variables match production server domain

HOME
- Homepage renders correctly
- Clean URL in address bar
- Clean URLs in outbound links

SHIRTS
- Page renders correctly (32 shirts total; 4 shirts per row)
- Clean URL in address bar
- Clean outbound URLs

SHIRT (Test for at least 3 random shirts)
- Page renders correctly
- Clean URL in address bar
- Clean outbound URLs
- Form renders correctly (all size options available)
- Shirt adds to cart properly
- "Continue shopping" link on shopping cart page returns to the original shirt page

SEARCH
- Page renders correctly
- Clean URL in the address bar
- Form renders properly
- Search results: empty search term
- Search results: non-existent search term
- Search results: existent search term
- Search results: non-existent search term manually entered into URL qquery string
- Search results: existent search term manually entered into URL qquery string
- Search results: verify that all shirts display for the following terms: "coding," "mike" and "logo"
- Search results: verity clean URLs for shirts displayed in search results
- Check for SQL injection attack vulnerability

CONTACT
- Page renders correctly
- Clean URL in the address bar
- Form renders properly
- Form validation: all inputs empty
- Form validation: all inputs except email empty
- Form validation: only email empty
- check for sql injection attack vulnerability
- check for honey pot 
- Check for email header injection attck vulnerability
- Send test email