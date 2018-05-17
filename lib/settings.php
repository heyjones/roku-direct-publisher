<?php

namespace roku_direct_publisher\settings;

add_action( 'admin_menu', __NAMESPACE__ . '\\admin_menu' );
add_action( 'admin_init', __NAMESPACE__ . '\\admin_init' );

function admin_menu(){
  add_submenu_page(
    'edit.php?post_type=roku_video',
    'Roku Direct Publisher Settings',
    'Settings',
    'manage_options',
    'roku_direct_publisher',
    'roku_direct_publisher\settings\render'
  );
}

function admin_init(){
  register_setting( 'roku_direct_publisher', 'roku_direct_publisher' );
}

function render(){
  $roku_direct_publisher = get_option( 'roku_direct_publisher', true );
  ?>
  <div class="wrap">
    <h1>
      Roku Direct Publisher Settings
    </h1>
    <form action="options.php" method="post">
      <?php settings_fields( 'roku_direct_publisher' ); ?>
      <table class="form-table">
        <tbody>
          <tr>
            <th scope="row">
              <label>
                Provider Name
              </label>
            </th>
            <td>
              <input type="text" name="roku_direct_publisher[provider_name]" value="<?php echo $roku_direct_publisher['provider_name']; ?>" class="regular-text">
            </td>
          </tr>
          <tr>
            <th scope="row">
              <label>
                Language
              </label>
            </th>
            <td>
              <select name="roku_direct_publisher[language]">
                <option value="en" <?php selected( $roku_direct_publisher['language'], 'en' ); ?>>English</option>
                <option value="en-US" <?php selected( $roku_direct_publisher['language'], 'en-US' ); ?>>English (US)</option>
                <option value="es" <?php selected( $roku_direct_publisher['language'], 'es' ); ?>>Spanish</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row">
              <label>
                Feed URL
              </label>
            </th>
            <td>
              <a href="<?php echo get_feed_link( 'roku-direct-publisher' ); ?>" target="_blank">
                <?php echo get_feed_link( 'roku-direct-publisher' ); ?>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
      <?php submit_button(); ?>
    </form>
  </div>
  <?php
}
