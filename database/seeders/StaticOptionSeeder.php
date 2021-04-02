<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaticOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        set_static_option('no_image', 'uploads/images/setting/no-image.png');
        set_static_option('fav_icon', null);
        set_static_option('frontend_logo', null);
        set_static_option('backend_logo', null);
        set_static_option('backend_light_logo', null);
        set_static_option('backend_text_logo', null);
        set_static_option('backend_text_light_logo', null);
        set_static_option('breadcrumb_image', null);


        set_static_option('company_email', 'company@gmail.com');
        set_static_option('company_phone', '01234567890');
        set_static_option('company_address', 'company---adddress');

        set_static_option('company_facebook_link', 'https://www.facebook.com/');
        set_static_option('company_twitter_link', 'https://twitter.com/');
        set_static_option('company_youtube_link', 'https://www.youtube.com/');
        set_static_option('company_instagram_link', 'https://www.instagram.com/');
        set_static_option('company_linkedin_link', 'https://www.linkedin.com/');

        set_static_option('custom_head_code', null);
        set_static_option('custom_foot_code', null);

        set_static_option('footer_credit', 'lorem ipsum Footer credit ....');

        set_static_option('meta_description', null);
        set_static_option('meta_keywords', null);
        set_static_option('meta_author', null);
        set_static_option('meta_image', null);

        set_static_option('fb_auto_extend', true);
        set_static_option('fb_page_connection', false);
        set_static_option('fb_page_id', '1234567890');
        set_static_option('fb_theme_color', '#7646ff');

        set_static_option('map_link', null);

    }
}
