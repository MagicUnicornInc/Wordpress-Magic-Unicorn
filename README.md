# Magic Unicorn Website - WordPress Theme

          This is the WordPress theme for the Magic Unicorn website. It was originally a React application and has been converted to a static HTML, CSS, and JavaScript structure for use with WordPress.

          ## Theme Structure

          The theme follows a standard WordPress structure:

          -   **`style.css`:** Contains the theme header information and main styles.
          -   **`index.php`:** The main template file.
          -   **`functions.php`:** Contains theme functions, including enqueuing styles and scripts.
          -   **`header.php`:** The header template.
          -   **`footer.php`:** The footer template.
          -   **`front-page.php`:** The template for the static home page.
          -   **`page-*.php`:** Templates for individual pages (About, Services, Portfolio, Blog, Contact).
          -   **`static-components/`:** Contains the HTML, CSS, and JavaScript for individual components.

          ## Setup Instructions

          1. **Install WordPress:**
              -   Set up a WordPress installation on your server or local environment. You can download WordPress from [https://wordpress.org/](https://wordpress.org/).
          2. **Upload the Theme:**
              -   Go to your WordPress admin dashboard.
              -   Navigate to "Appearance" -> "Themes."
              -   Click "Add New" and then "Upload Theme."
              -   Upload the `magic-unicorn-website.zip` file (you'll need to zip the theme folder first).
              -   Alternatively, you can manually upload the unzipped theme folder to the `/wp-content/themes/` directory of your WordPress installation.
          3. **Activate the Theme:**
              -   In the WordPress admin dashboard, go to "Appearance" -> "Themes."
              -   Find the "Magic Unicorn Website" theme and click "Activate."
          4. **Create Pages:**
              -   Go to "Pages" -> "Add New" and create the following pages:
                  -   **Home:** Assign the "Front Page" template.
                  -   **About:** Assign the "About Page" template.
                  -   **Services:** Assign the "Services Page" template.
                  -   **Portfolio:** Assign the "Portfolio Page" template.
                  -   **Blog:** Assign the "Blog Page" template.
                  -   **Contact:** Assign the "Contact Page" template.
          5. **Set the Front Page:**
              -   Go to "Settings" -> "Reading."
              -   Set "Your homepage displays" to "A static page."
              -   Select "Home" as the homepage.
          6. **Create the Menu:**
              -   Go to "Appearance" -> "Menus."
              -   Create a new menu (e.g., "Main Menu").
              -   Add the pages you created to the menu.
              -   Set the menu location to "Primary Menu" or a similar location defined by the theme.
          7. **Customize:**
              -   Use the WordPress Customizer ("Appearance" -> "Customize") to adjust theme settings, if available.

          ## Development

          -   The theme is built using static HTML, CSS, and JavaScript.
          -   Component-specific styles are located in the `static-components` directory.
          -   The main stylesheet is `style.css`.
          -   `functions.php` handles enqueuing of styles and scripts.

          ## Notes

          -   The contact form on the Contact page is currently static. You'll need to integrate it with a WordPress form plugin or custom form handling logic.
          -   The blog page currently displays static content. You'll need to modify the loop in `page-blog.php` to fetch posts dynamically from the database.
          -   Consider creating custom post types for portfolio items and services to manage them more effectively.

          ## License

          This theme is licensed under the MIT License.
