<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config
before('deploy', 'slack:notify');

set('repository', 'https://github.com/vortechstudio/Site.git');
set('slack_webhook', 'https://hooks.slack.com/services/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');
set('slack_channel', '#general');

set('git_tty', true);
set('allow_anonymous_stats', false);

// Hosts

host('37.187.117.190')
    ->set('stage', 'production')
    ->set('remote_user', 'deploy')
    ->set('deploy_path', '/home/vortechstudio.fr/public_html')
    ->set('branch', 'master');

host('82.64.133.182')
    ->set('stage', 'staging')
    ->set('remote_user', 'deploy')
    ->set('deploy_path', '/home/vortechstudio.ovh/public_html')
    ->set('branch', 'master');


// Hooks
after('deploy:success', 'slack:notify:success');
after('deploy:failed', 'deploy:unlock');
after('deploy:failed', 'slack:notify:failure');
