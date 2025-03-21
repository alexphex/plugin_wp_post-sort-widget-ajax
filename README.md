# plugin_wp_post-sort-widget-ajax

# Post Sort Widget

**Post Sort Widget** is a WordPress plugin that adds a widget for sorting posts using AJAX. With this widget, users can sort posts by date or title without refreshing the page.

This project was created - me & Copilot

## 🛠️ Features

- Sort posts by date (Sort by Date).
- Sort posts by title (Sort by Title).
- AJAX requests for updating the posts list without a page reload.
- Default "Choose" option for improved user experience.

## 📋 Installation

1. Download the plugin files and place them in the folder:  
   `wp-content/plugins/post-sort-widget/`.

2. Activate the plugin in the WordPress admin panel under **Plugins**.

3. Go to the **Widgets** section and add the `Sort Posts Widget` to one of your site’s sidebars.

## 🖥️ Usage

- Navigate to the page where the widget is installed.
- Select a sorting method (by date or by title) from the dropdown menu.
- Posts will instantly update based on your selection without reloading the page.

## 🧑‍💻 Technical Details

### Main Files:
- **`post-sort-widget.php`** — the main plugin file containing widget logic and AJAX handlers.
- **`post-sort.js`** — JavaScript for handling AJAX requests and user interaction.

### Highlights:
- AJAX handlers are registered for logged-in users (`wp_ajax_sort_posts`) and guests (`wp_ajax_nopriv_sort_posts`).
- Script localization is used to integrate WordPress AJAX API with JavaScript.

## 📂 File Structure

## 🚀 Future Plans

- Add more sorting options, such as by author or category.
- Enhance the widget design for better aesthetics.

---

This project was created with great care and enthusiasm **by me and Copilot**.

## 📄 License

This plugin is distributed under the MIT License. You are free to use and modify it.

---


