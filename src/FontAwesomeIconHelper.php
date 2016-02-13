<?php

namespace medienpol\yii2icon;

use medienpol\yii2icon\base\BaseIconHelper;
use yii\helpers\ArrayHelper;

/**
 * Class FontAwesomeIconHelper
 * @package medienpol\yii2icon
 *
 * Provides rendering of Fontawesome icons.
 */
class FontAwesomeIconHelper extends BaseIconHelper
{
    const FA_GLASS = 'fa-glass';
    const FA_MUSIC = 'fa-music';
    const FA_SEARCH = 'fa-search';
    const FA_ENVELOPE_O = 'fa-envelope-o';
    const FA_HEART = 'fa-heart';
    const FA_STAR = 'fa-star';
    const FA_STAR_O = 'fa-star-o';
    const FA_USER = 'fa-user';
    const FA_FILM = 'fa-film';
    const FA_TH_LARGE = 'fa-th-large';
    const FA_TH = 'fa-th';
    const FA_TH_LIST = 'fa-th-list';
    const FA_CHECK = 'fa-check';
    const FA_TIMES = 'fa-times';
    const FA_SEARCH_PLUS = 'fa-search-plus';
    const FA_SEARCH_MINUS = 'fa-search-minus';
    const FA_POWER_OFF = 'fa-power-off';
    const FA_SIGNAL = 'fa-signal';
    const FA_COG = 'fa-cog';
    const FA_TRASH_O = 'fa-trash-o';
    const FA_HOME = 'fa-home';
    const FA_FILE_O = 'fa-file-o';
    const FA_CLOCK_O = 'fa-clock-o';
    const FA_ROAD = 'fa-road';
    const FA_DOWNLOAD = 'fa-download';
    const FA_ARROW_CIRCLE_O_DOWN = 'fa-arrow-circle-o-down';
    const FA_ARROW_CIRCLE_O_UP = 'fa-arrow-circle-o-up';
    const FA_INBOX = 'fa-inbox';
    const FA_PLAY_CIRCLE_O = 'fa-play-circle-o';
    const FA_REPEAT = 'fa-repeat';
    const FA_REFRESH = 'fa-refresh';
    const FA_LIST_ALT = 'fa-list-alt';
    const FA_LOCK = 'fa-lock';
    const FA_FLAG = 'fa-flag';
    const FA_HEADPHONES = 'fa-headphones';
    const FA_VOLUME_OFF = 'fa-volume-off';
    const FA_VOLUME_DOWN = 'fa-volume-down';
    const FA_VOLUME_UP = 'fa-volume-up';
    const FA_QRCODE = 'fa-qrcode';
    const FA_BARCODE = 'fa-barcode';
    const FA_TAG = 'fa-tag';
    const FA_TAGS = 'fa-tags';
    const FA_BOOK = 'fa-book';
    const FA_BOOKMARK = 'fa-bookmark';
    const FA_PRINT = 'fa-print';
    const FA_CAMERA = 'fa-camera';
    const FA_FONT = 'fa-font';
    const FA_BOLD = 'fa-bold';
    const FA_ITALIC = 'fa-italic';
    const FA_TEXT_HEIGHT = 'fa-text-height';
    const FA_TEXT_WIDTH = 'fa-text-width';
    const FA_ALIGN_LEFT = 'fa-align-left';
    const FA_ALIGN_CENTER = 'fa-align-center';
    const FA_ALIGN_RIGHT = 'fa-align-right';
    const FA_ALIGN_JUSTIFY = 'fa-align-justify';
    const FA_LIST = 'fa-list';
    const FA_OUTDENT = 'fa-outdent';
    const FA_INDENT = 'fa-indent';
    const FA_VIDEO_CAMERA = 'fa-video-camera';
    const FA_PICTURE_O = 'fa-picture-o';
    const FA_PENCIL = 'fa-pencil';
    const FA_MAP_MARKER = 'fa-map-marker';
    const FA_ADJUST = 'fa-adjust';
    const FA_TINT = 'fa-tint';
    const FA_PENCIL_SQUARE_O = 'fa-pencil-square-o';
    const FA_SHARE_SQUARE_O = 'fa-share-square-o';
    const FA_CHECK_SQUARE_O = 'fa-check-square-o';
    const FA_ARROWS = 'fa-arrows';
    const FA_STEP_BACKWARD = 'fa-step-backward';
    const FA_FAST_BACKWARD = 'fa-fast-backward';
    const FA_BACKWARD = 'fa-backward';
    const FA_PLAY = 'fa-play';
    const FA_PAUSE = 'fa-pause';
    const FA_STOP = 'fa-stop';
    const FA_FORWARD = 'fa-forward';
    const FA_FAST_FORWARD = 'fa-fast-forward';
    const FA_STEP_FORWARD = 'fa-step-forward';
    const FA_EJECT = 'fa-eject';
    const FA_CHEVRON_LEFT = 'fa-chevron-left';
    const FA_CHEVRON_RIGHT = 'fa-chevron-right';
    const FA_PLUS_CIRCLE = 'fa-plus-circle';
    const FA_MINUS_CIRCLE = 'fa-minus-circle';
    const FA_TIMES_CIRCLE = 'fa-times-circle';
    const FA_CHECK_CIRCLE = 'fa-check-circle';
    const FA_QUESTION_CIRCLE = 'fa-question-circle';
    const FA_INFO_CIRCLE = 'fa-info-circle';
    const FA_CROSSHAIRS = 'fa-crosshairs';
    const FA_TIMES_CIRCLE_O = 'fa-times-circle-o';
    const FA_CHECK_CIRCLE_O = 'fa-check-circle-o';
    const FA_BAN = 'fa-ban';
    const FA_ARROW_LEFT = 'fa-arrow-left';
    const FA_ARROW_RIGHT = 'fa-arrow-right';
    const FA_ARROW_UP = 'fa-arrow-up';
    const FA_ARROW_DOWN = 'fa-arrow-down';
    const FA_SHARE = 'fa-share';
    const FA_EXPAND = 'fa-expand';
    const FA_COMPRESS = 'fa-compress';
    const FA_PLUS = 'fa-plus';
    const FA_MINUS = 'fa-minus';
    const FA_ASTERISK = 'fa-asterisk';
    const FA_EXCLAMATION_CIRCLE = 'fa-exclamation-circle';
    const FA_GIFT = 'fa-gift';
    const FA_LEAF = 'fa-leaf';
    const FA_FIRE = 'fa-fire';
    const FA_EYE = 'fa-eye';
    const FA_EYE_SLASH = 'fa-eye-slash';
    const FA_EXCLAMATION_TRIANGLE = 'fa-exclamation-triangle';
    const FA_PLANE = 'fa-plane';
    const FA_CALENDAR = 'fa-calendar';
    const FA_RANDOM = 'fa-random';
    const FA_COMMENT = 'fa-comment';
    const FA_MAGNET = 'fa-magnet';
    const FA_CHEVRON_UP = 'fa-chevron-up';
    const FA_CHEVRON_DOWN = 'fa-chevron-down';
    const FA_RETWEET = 'fa-retweet';
    const FA_SHOPPING_CART = 'fa-shopping-cart';
    const FA_FOLDER = 'fa-folder';
    const FA_FOLDER_OPEN = 'fa-folder-open';
    const FA_ARROWS_V = 'fa-arrows-v';
    const FA_ARROWS_H = 'fa-arrows-h';
    const FA_BAR_CHART = 'fa-bar-chart';
    const FA_TWITTER_SQUARE = 'fa-twitter-square';
    const FA_FACEBOOK_SQUARE = 'fa-facebook-square';
    const FA_CAMERA_RETRO = 'fa-camera-retro';
    const FA_KEY = 'fa-key';
    const FA_COGS = 'fa-cogs';
    const FA_COMMENTS = 'fa-comments';
    const FA_THUMBS_O_UP = 'fa-thumbs-o-up';
    const FA_THUMBS_O_DOWN = 'fa-thumbs-o-down';
    const FA_STAR_HALF = 'fa-star-half';
    const FA_HEART_O = 'fa-heart-o';
    const FA_SIGN_OUT = 'fa-sign-out';
    const FA_LINKEDIN_SQUARE = 'fa-linkedin-square';
    const FA_THUMB_TACK = 'fa-thumb-tack';
    const FA_EXTERNAL_LINK = 'fa-external-link';
    const FA_SIGN_IN = 'fa-sign-in';
    const FA_TROPHY = 'fa-trophy';
    const FA_GITHUB_SQUARE = 'fa-github-square';
    const FA_UPLOAD = 'fa-upload';
    const FA_LEMON_O = 'fa-lemon-o';
    const FA_PHONE = 'fa-phone';
    const FA_SQUARE_O = 'fa-square-o';
    const FA_BOOKMARK_O = 'fa-bookmark-o';
    const FA_PHONE_SQUARE = 'fa-phone-square';
    const FA_TWITTER = 'fa-twitter';
    const FA_FACEBOOK = 'fa-facebook';
    const FA_GITHUB = 'fa-github';
    const FA_UNLOCK = 'fa-unlock';
    const FA_CREDIT_CARD = 'fa-credit-card';
    const FA_RSS = 'fa-rss';
    const FA_HDD_O = 'fa-hdd-o';
    const FA_BULLHORN = 'fa-bullhorn';
    const FA_BELL = 'fa-bell';
    const FA_CERTIFICATE = 'fa-certificate';
    const FA_HAND_O_RIGHT = 'fa-hand-o-right';
    const FA_HAND_O_LEFT = 'fa-hand-o-left';
    const FA_HAND_O_UP = 'fa-hand-o-up';
    const FA_HAND_O_DOWN = 'fa-hand-o-down';
    const FA_ARROW_CIRCLE_LEFT = 'fa-arrow-circle-left';
    const FA_ARROW_CIRCLE_RIGHT = 'fa-arrow-circle-right';
    const FA_ARROW_CIRCLE_UP = 'fa-arrow-circle-up';
    const FA_ARROW_CIRCLE_DOWN = 'fa-arrow-circle-down';
    const FA_GLOBE = 'fa-globe';
    const FA_WRENCH = 'fa-wrench';
    const FA_TASKS = 'fa-tasks';
    const FA_FILTER = 'fa-filter';
    const FA_BRIEFCASE = 'fa-briefcase';
    const FA_ARROWS_ALT = 'fa-arrows-alt';
    const FA_USERS = 'fa-users';
    const FA_LINK = 'fa-link';
    const FA_CLOUD = 'fa-cloud';
    const FA_FLASK = 'fa-flask';
    const FA_SCISSORS = 'fa-scissors';
    const FA_FILES_O = 'fa-files-o';
    const FA_PAPERCLIP = 'fa-paperclip';
    const FA_FLOPPY_O = 'fa-floppy-o';
    const FA_SQUARE = 'fa-square';
    const FA_BARS = 'fa-bars';
    const FA_LIST_UL = 'fa-list-ul';
    const FA_LIST_OL = 'fa-list-ol';
    const FA_STRIKETHROUGH = 'fa-strikethrough';
    const FA_UNDERLINE = 'fa-underline';
    const FA_TABLE = 'fa-table';
    const FA_MAGIC = 'fa-magic';
    const FA_TRUCK = 'fa-truck';
    const FA_PINTEREST = 'fa-pinterest';
    const FA_PINTEREST_SQUARE = 'fa-pinterest-square';
    const FA_GOOGLE_PLUS_SQUARE = 'fa-google-plus-square';
    const FA_GOOGLE_PLUS = 'fa-google-plus';
    const FA_MONEY = 'fa-money';
    const FA_CARET_DOWN = 'fa-caret-down';
    const FA_CARET_UP = 'fa-caret-up';
    const FA_CARET_LEFT = 'fa-caret-left';
    const FA_CARET_RIGHT = 'fa-caret-right';
    const FA_COLUMNS = 'fa-columns';
    const FA_SORT = 'fa-sort';
    const FA_SORT_DESC = 'fa-sort-desc';
    const FA_SORT_ASC = 'fa-sort-asc';
    const FA_ENVELOPE = 'fa-envelope';
    const FA_LINKEDIN = 'fa-linkedin';
    const FA_UNDO = 'fa-undo';
    const FA_GAVEL = 'fa-gavel';
    const FA_TACHOMETER = 'fa-tachometer';
    const FA_COMMENT_O = 'fa-comment-o';
    const FA_COMMENTS_O = 'fa-comments-o';
    const FA_BOLT = 'fa-bolt';
    const FA_SITEMAP = 'fa-sitemap';
    const FA_UMBRELLA = 'fa-umbrella';
    const FA_CLIPBOARD = 'fa-clipboard';
    const FA_LIGHTBULB_O = 'fa-lightbulb-o';
    const FA_EXCHANGE = 'fa-exchange';
    const FA_CLOUD_DOWNLOAD = 'fa-cloud-download';
    const FA_CLOUD_UPLOAD = 'fa-cloud-upload';
    const FA_USER_MD = 'fa-user-md';
    const FA_STETHOSCOPE = 'fa-stethoscope';
    const FA_SUITCASE = 'fa-suitcase';
    const FA_BELL_O = 'fa-bell-o';
    const FA_COFFEE = 'fa-coffee';
    const FA_CUTLERY = 'fa-cutlery';
    const FA_FILE_TEXT_O = 'fa-file-text-o';
    const FA_BUILDING_O = 'fa-building-o';
    const FA_HOSPITAL_O = 'fa-hospital-o';
    const FA_AMBULANCE = 'fa-ambulance';
    const FA_MEDKIT = 'fa-medkit';
    const FA_FIGHTER_JET = 'fa-fighter-jet';
    const FA_BEER = 'fa-beer';
    const FA_H_SQUARE = 'fa-h-square';
    const FA_PLUS_SQUARE = 'fa-plus-square';
    const FA_ANGLE_DOUBLE_LEFT = 'fa-angle-double-left';
    const FA_ANGLE_DOUBLE_RIGHT = 'fa-angle-double-right';
    const FA_ANGLE_DOUBLE_UP = 'fa-angle-double-up';
    const FA_ANGLE_DOUBLE_DOWN = 'fa-angle-double-down';
    const FA_ANGLE_LEFT = 'fa-angle-left';
    const FA_ANGLE_RIGHT = 'fa-angle-right';
    const FA_ANGLE_UP = 'fa-angle-up';
    const FA_ANGLE_DOWN = 'fa-angle-down';
    const FA_DESKTOP = 'fa-desktop';
    const FA_LAPTOP = 'fa-laptop';
    const FA_TABLET = 'fa-tablet';
    const FA_MOBILE = 'fa-mobile';
    const FA_CIRCLE_O = 'fa-circle-o';
    const FA_QUOTE_LEFT = 'fa-quote-left';
    const FA_QUOTE_RIGHT = 'fa-quote-right';
    const FA_SPINNER = 'fa-spinner';
    const FA_CIRCLE = 'fa-circle';
    const FA_REPLY = 'fa-reply';
    const FA_GITHUB_ALT = 'fa-github-alt';
    const FA_FOLDER_O = 'fa-folder-o';
    const FA_FOLDER_OPEN_O = 'fa-folder-open-o';
    const FA_SMILE_O = 'fa-smile-o';
    const FA_FROWN_O = 'fa-frown-o';
    const FA_MEH_O = 'fa-meh-o';
    const FA_GAMEPAD = 'fa-gamepad';
    const FA_KEYBOARD_O = 'fa-keyboard-o';
    const FA_FLAG_O = 'fa-flag-o';
    const FA_FLAG_CHECKERED = 'fa-flag-checkered';
    const FA_TERMINAL = 'fa-terminal';
    const FA_CODE = 'fa-code';
    const FA_REPLY_ALL = 'fa-reply-all';
    const FA_STAR_HALF_O = 'fa-star-half-o';
    const FA_LOCATION_ARROW = 'fa-location-arrow';
    const FA_CROP = 'fa-crop';
    const FA_CODE_FORK = 'fa-code-fork';
    const FA_CHAIN_BROKEN = 'fa-chain-broken';
    const FA_QUESTION = 'fa-question';
    const FA_INFO = 'fa-info';
    const FA_EXCLAMATION = 'fa-exclamation';
    const FA_SUPERSCRIPT = 'fa-superscript';
    const FA_SUBSCRIPT = 'fa-subscript';
    const FA_ERASER = 'fa-eraser';
    const FA_PUZZLE_PIECE = 'fa-puzzle-piece';
    const FA_MICROPHONE = 'fa-microphone';
    const FA_MICROPHONE_SLASH = 'fa-microphone-slash';
    const FA_SHIELD = 'fa-shield';
    const FA_CALENDAR_O = 'fa-calendar-o';
    const FA_FIRE_EXTINGUISHER = 'fa-fire-extinguisher';
    const FA_ROCKET = 'fa-rocket';
    const FA_MAXCDN = 'fa-maxcdn';
    const FA_CHEVRON_CIRCLE_LEFT = 'fa-chevron-circle-left';
    const FA_CHEVRON_CIRCLE_RIGHT = 'fa-chevron-circle-right';
    const FA_CHEVRON_CIRCLE_UP = 'fa-chevron-circle-up';
    const FA_CHEVRON_CIRCLE_DOWN = 'fa-chevron-circle-down';
    const FA_HTML5 = 'fa-html5';
    const FA_CSS3 = 'fa-css3';
    const FA_ANCHOR = 'fa-anchor';
    const FA_UNLOCK_ALT = 'fa-unlock-alt';
    const FA_BULLSEYE = 'fa-bullseye';
    const FA_ELLIPSIS_H = 'fa-ellipsis-h';
    const FA_ELLIPSIS_V = 'fa-ellipsis-v';
    const FA_RSS_SQUARE = 'fa-rss-square';
    const FA_PLAY_CIRCLE = 'fa-play-circle';
    const FA_TICKET = 'fa-ticket';
    const FA_MINUS_SQUARE = 'fa-minus-square';
    const FA_MINUS_SQUARE_O = 'fa-minus-square-o';
    const FA_LEVEL_UP = 'fa-level-up';
    const FA_LEVEL_DOWN = 'fa-level-down';
    const FA_CHECK_SQUARE = 'fa-check-square';
    const FA_PENCIL_SQUARE = 'fa-pencil-square';
    const FA_EXTERNAL_LINK_SQUARE = 'fa-external-link-square';
    const FA_SHARE_SQUARE = 'fa-share-square';
    const FA_COMPASS = 'fa-compass';
    const FA_CARET_SQUARE_O_DOWN = 'fa-caret-square-o-down';
    const FA_CARET_SQUARE_O_UP = 'fa-caret-square-o-up';
    const FA_CARET_SQUARE_O_RIGHT = 'fa-caret-square-o-right';
    const FA_EUR = 'fa-eur';
    const FA_GBP = 'fa-gbp';
    const FA_USD = 'fa-usd';
    const FA_INR = 'fa-inr';
    const FA_JPY = 'fa-jpy';
    const FA_RUB = 'fa-rub';
    const FA_KRW = 'fa-krw';
    const FA_BTC = 'fa-btc';
    const FA_FILE = 'fa-file';
    const FA_FILE_TEXT = 'fa-file-text';
    const FA_SORT_ALPHA_ASC = 'fa-sort-alpha-asc';
    const FA_SORT_ALPHA_DESC = 'fa-sort-alpha-desc';
    const FA_SORT_AMOUNT_ASC = 'fa-sort-amount-asc';
    const FA_SORT_AMOUNT_DESC = 'fa-sort-amount-desc';
    const FA_SORT_NUMERIC_ASC = 'fa-sort-numeric-asc';
    const FA_SORT_NUMERIC_DESC = 'fa-sort-numeric-desc';
    const FA_THUMBS_UP = 'fa-thumbs-up';
    const FA_THUMBS_DOWN = 'fa-thumbs-down';
    const FA_YOUTUBE_SQUARE = 'fa-youtube-square';
    const FA_YOUTUBE = 'fa-youtube';
    const FA_XING = 'fa-xing';
    const FA_XING_SQUARE = 'fa-xing-square';
    const FA_YOUTUBE_PLAY = 'fa-youtube-play';
    const FA_DROPBOX = 'fa-dropbox';
    const FA_STACK_OVERFLOW = 'fa-stack-overflow';
    const FA_INSTAGRAM = 'fa-instagram';
    const FA_FLICKR = 'fa-flickr';
    const FA_ADN = 'fa-adn';
    const FA_BITBUCKET = 'fa-bitbucket';
    const FA_BITBUCKET_SQUARE = 'fa-bitbucket-square';
    const FA_TUMBLR = 'fa-tumblr';
    const FA_TUMBLR_SQUARE = 'fa-tumblr-square';
    const FA_LONG_ARROW_DOWN = 'fa-long-arrow-down';
    const FA_LONG_ARROW_UP = 'fa-long-arrow-up';
    const FA_LONG_ARROW_LEFT = 'fa-long-arrow-left';
    const FA_LONG_ARROW_RIGHT = 'fa-long-arrow-right';
    const FA_APPLE = 'fa-apple';
    const FA_WINDOWS = 'fa-windows';
    const FA_ANDROID = 'fa-android';
    const FA_LINUX = 'fa-linux';
    const FA_DRIBBBLE = 'fa-dribbble';
    const FA_SKYPE = 'fa-skype';
    const FA_FOURSQUARE = 'fa-foursquare';
    const FA_TRELLO = 'fa-trello';
    const FA_FEMALE = 'fa-female';
    const FA_MALE = 'fa-male';
    const FA_GRATIPAY = 'fa-gratipay';
    const FA_SUN_O = 'fa-sun-o';
    const FA_MOON_O = 'fa-moon-o';
    const FA_ARCHIVE = 'fa-archive';
    const FA_BUG = 'fa-bug';
    const FA_VK = 'fa-vk';
    const FA_WEIBO = 'fa-weibo';
    const FA_RENREN = 'fa-renren';
    const FA_PAGELINES = 'fa-pagelines';
    const FA_STACK_EXCHANGE = 'fa-stack-exchange';
    const FA_ARROW_CIRCLE_O_RIGHT = 'fa-arrow-circle-o-right';
    const FA_ARROW_CIRCLE_O_LEFT = 'fa-arrow-circle-o-left';
    const FA_CARET_SQUARE_O_LEFT = 'fa-caret-square-o-left';
    const FA_DOT_CIRCLE_O = 'fa-dot-circle-o';
    const FA_WHEELCHAIR = 'fa-wheelchair';
    const FA_VIMEO_SQUARE = 'fa-vimeo-square';
    const FA_TRY = 'fa-try';
    const FA_PLUS_SQUARE_O = 'fa-plus-square-o';
    const FA_SPACE_SHUTTLE = 'fa-space-shuttle';
    const FA_SLACK = 'fa-slack';
    const FA_ENVELOPE_SQUARE = 'fa-envelope-square';
    const FA_WORDPRESS = 'fa-wordpress';
    const FA_OPENID = 'fa-openid';
    const FA_UNIVERSITY = 'fa-university';
    const FA_GRADUATION_CAP = 'fa-graduation-cap';
    const FA_YAHOO = 'fa-yahoo';
    const FA_GOOGLE = 'fa-google';
    const FA_REDDIT = 'fa-reddit';
    const FA_REDDIT_SQUARE = 'fa-reddit-square';
    const FA_STUMBLEUPON_CIRCLE = 'fa-stumbleupon-circle';
    const FA_STUMBLEUPON = 'fa-stumbleupon';
    const FA_DELICIOUS = 'fa-delicious';
    const FA_DIGG = 'fa-digg';
    const FA_PIED_PIPER = 'fa-pied-piper';
    const FA_PIED_PIPER_ALT = 'fa-pied-piper-alt';
    const FA_DRUPAL = 'fa-drupal';
    const FA_JOOMLA = 'fa-joomla';
    const FA_LANGUAGE = 'fa-language';
    const FA_FAX = 'fa-fax';
    const FA_BUILDING = 'fa-building';
    const FA_CHILD = 'fa-child';
    const FA_PAW = 'fa-paw';
    const FA_SPOON = 'fa-spoon';
    const FA_CUBE = 'fa-cube';
    const FA_CUBES = 'fa-cubes';
    const FA_BEHANCE = 'fa-behance';
    const FA_BEHANCE_SQUARE = 'fa-behance-square';
    const FA_STEAM = 'fa-steam';
    const FA_STEAM_SQUARE = 'fa-steam-square';
    const FA_RECYCLE = 'fa-recycle';
    const FA_CAR = 'fa-car';
    const FA_TAXI = 'fa-taxi';
    const FA_TREE = 'fa-tree';
    const FA_SPOTIFY = 'fa-spotify';
    const FA_DEVIANTART = 'fa-deviantart';
    const FA_SOUNDCLOUD = 'fa-soundcloud';
    const FA_DATABASE = 'fa-database';
    const FA_FILE_PDF_O = 'fa-file-pdf-o';
    const FA_FILE_WORD_O = 'fa-file-word-o';
    const FA_FILE_EXCEL_O = 'fa-file-excel-o';
    const FA_FILE_POWERPOINT_O = 'fa-file-powerpoint-o';
    const FA_FILE_IMAGE_O = 'fa-file-image-o';
    const FA_FILE_ARCHIVE_O = 'fa-file-archive-o';
    const FA_FILE_AUDIO_O = 'fa-file-audio-o';
    const FA_FILE_VIDEO_O = 'fa-file-video-o';
    const FA_FILE_CODE_O = 'fa-file-code-o';
    const FA_VINE = 'fa-vine';
    const FA_CODEPEN = 'fa-codepen';
    const FA_JSFIDDLE = 'fa-jsfiddle';
    const FA_LIFE_RING = 'fa-life-ring';
    const FA_CIRCLE_O_NOTCH = 'fa-circle-o-notch';
    const FA_REBEL = 'fa-rebel';
    const FA_EMPIRE = 'fa-empire';
    const FA_GIT_SQUARE = 'fa-git-square';
    const FA_GIT = 'fa-git';
    const FA_HACKER_NEWS = 'fa-hacker-news';
    const FA_TENCENT_WEIBO = 'fa-tencent-weibo';
    const FA_QQ = 'fa-qq';
    const FA_WEIXIN = 'fa-weixin';
    const FA_PAPER_PLANE = 'fa-paper-plane';
    const FA_PAPER_PLANE_O = 'fa-paper-plane-o';
    const FA_HISTORY = 'fa-history';
    const FA_CIRCLE_THIN = 'fa-circle-thin';
    const FA_HEADER = 'fa-header';
    const FA_PARAGRAPH = 'fa-paragraph';
    const FA_SLIDERS = 'fa-sliders';
    const FA_SHARE_ALT = 'fa-share-alt';
    const FA_SHARE_ALT_SQUARE = 'fa-share-alt-square';
    const FA_BOMB = 'fa-bomb';
    const FA_FUTBOL_O = 'fa-futbol-o';
    const FA_TTY = 'fa-tty';
    const FA_BINOCULARS = 'fa-binoculars';
    const FA_PLUG = 'fa-plug';
    const FA_SLIDESHARE = 'fa-slideshare';
    const FA_TWITCH = 'fa-twitch';
    const FA_YELP = 'fa-yelp';
    const FA_NEWSPAPER_O = 'fa-newspaper-o';
    const FA_WIFI = 'fa-wifi';
    const FA_CALCULATOR = 'fa-calculator';
    const FA_PAYPAL = 'fa-paypal';
    const FA_GOOGLE_WALLET = 'fa-google-wallet';
    const FA_CC_VISA = 'fa-cc-visa';
    const FA_CC_MASTERCARD = 'fa-cc-mastercard';
    const FA_CC_DISCOVER = 'fa-cc-discover';
    const FA_CC_AMEX = 'fa-cc-amex';
    const FA_CC_PAYPAL = 'fa-cc-paypal';
    const FA_CC_STRIPE = 'fa-cc-stripe';
    const FA_BELL_SLASH = 'fa-bell-slash';
    const FA_BELL_SLASH_O = 'fa-bell-slash-o';
    const FA_TRASH = 'fa-trash';
    const FA_COPYRIGHT = 'fa-copyright';
    const FA_AT = 'fa-at';
    const FA_EYEDROPPER = 'fa-eyedropper';
    const FA_PAINT_BRUSH = 'fa-paint-brush';
    const FA_BIRTHDAY_CAKE = 'fa-birthday-cake';
    const FA_AREA_CHART = 'fa-area-chart';
    const FA_PIE_CHART = 'fa-pie-chart';
    const FA_LINE_CHART = 'fa-line-chart';
    const FA_LASTFM = 'fa-lastfm';
    const FA_LASTFM_SQUARE = 'fa-lastfm-square';
    const FA_TOGGLE_OFF = 'fa-toggle-off';
    const FA_TOGGLE_ON = 'fa-toggle-on';
    const FA_BICYCLE = 'fa-bicycle';
    const FA_BUS = 'fa-bus';
    const FA_IOXHOST = 'fa-ioxhost';
    const FA_ANGELLIST = 'fa-angellist';
    const FA_CC = 'fa-cc';
    const FA_ILS = 'fa-ils';
    const FA_MEANPATH = 'fa-meanpath';
    const FA_BUYSELLADS = 'fa-buysellads';
    const FA_CONNECTDEVELOP = 'fa-connectdevelop';
    const FA_DASHCUBE = 'fa-dashcube';
    const FA_FORUMBEE = 'fa-forumbee';
    const FA_LEANPUB = 'fa-leanpub';
    const FA_SELLSY = 'fa-sellsy';
    const FA_SHIRTSINBULK = 'fa-shirtsinbulk';
    const FA_SIMPLYBUILT = 'fa-simplybuilt';
    const FA_SKYATLAS = 'fa-skyatlas';
    const FA_CART_PLUS = 'fa-cart-plus';
    const FA_CART_ARROW_DOWN = 'fa-cart-arrow-down';
    const FA_DIAMOND = 'fa-diamond';
    const FA_SHIP = 'fa-ship';
    const FA_USER_SECRET = 'fa-user-secret';
    const FA_MOTORCYCLE = 'fa-motorcycle';
    const FA_STREET_VIEW = 'fa-street-view';
    const FA_HEARTBEAT = 'fa-heartbeat';
    const FA_VENUS = 'fa-venus';
    const FA_MARS = 'fa-mars';
    const FA_MERCURY = 'fa-mercury';
    const FA_TRANSGENDER = 'fa-transgender';
    const FA_TRANSGENDER_ALT = 'fa-transgender-alt';
    const FA_VENUS_DOUBLE = 'fa-venus-double';
    const FA_MARS_DOUBLE = 'fa-mars-double';
    const FA_VENUS_MARS = 'fa-venus-mars';
    const FA_MARS_STROKE = 'fa-mars-stroke';
    const FA_MARS_STROKE_V = 'fa-mars-stroke-v';
    const FA_MARS_STROKE_H = 'fa-mars-stroke-h';
    const FA_NEUTER = 'fa-neuter';
    const FA_GENDERLESS = 'fa-genderless';
    const FA_FACEBOOK_OFFICIAL = 'fa-facebook-official';
    const FA_PINTEREST_P = 'fa-pinterest-p';
    const FA_WHATSAPP = 'fa-whatsapp';
    const FA_SERVER = 'fa-server';
    const FA_USER_PLUS = 'fa-user-plus';
    const FA_USER_TIMES = 'fa-user-times';
    const FA_BED = 'fa-bed';
    const FA_VIACOIN = 'fa-viacoin';
    const FA_TRAIN = 'fa-train';
    const FA_SUBWAY = 'fa-subway';
    const FA_MEDIUM = 'fa-medium';
    const FA_Y_COMBINATOR = 'fa-y-combinator';
    const FA_OPTIN_MONSTER = 'fa-optin-monster';
    const FA_OPENCART = 'fa-opencart';
    const FA_EXPEDITEDSSL = 'fa-expeditedssl';
    const FA_BATTERY_FULL = 'fa-battery-full';
    const FA_BATTERY_THREE_QUARTERS = 'fa-battery-three-quarters';
    const FA_BATTERY_HALF = 'fa-battery-half';
    const FA_BATTERY_QUARTER = 'fa-battery-quarter';
    const FA_BATTERY_EMPTY = 'fa-battery-empty';
    const FA_MOUSE_POINTER = 'fa-mouse-pointer';
    const FA_I_CURSOR = 'fa-i-cursor';
    const FA_OBJECT_GROUP = 'fa-object-group';
    const FA_OBJECT_UNGROUP = 'fa-object-ungroup';
    const FA_STICKY_NOTE = 'fa-sticky-note';
    const FA_STICKY_NOTE_O = 'fa-sticky-note-o';
    const FA_CC_JCB = 'fa-cc-jcb';
    const FA_CC_DINERS_CLUB = 'fa-cc-diners-club';
    const FA_CLONE = 'fa-clone';
    const FA_BALANCE_SCALE = 'fa-balance-scale';
    const FA_HOURGLASS_O = 'fa-hourglass-o';
    const FA_HOURGLASS_START = 'fa-hourglass-start';
    const FA_HOURGLASS_HALF = 'fa-hourglass-half';
    const FA_HOURGLASS_END = 'fa-hourglass-end';
    const FA_HOURGLASS = 'fa-hourglass';
    const FA_HAND_ROCK_O = 'fa-hand-rock-o';
    const FA_HAND_PAPER_O = 'fa-hand-paper-o';
    const FA_HAND_SCISSORS_O = 'fa-hand-scissors-o';
    const FA_HAND_LIZARD_O = 'fa-hand-lizard-o';
    const FA_HAND_SPOCK_O = 'fa-hand-spock-o';
    const FA_HAND_POINTER_O = 'fa-hand-pointer-o';
    const FA_HAND_PEACE_O = 'fa-hand-peace-o';
    const FA_TRADEMARK = 'fa-trademark';
    const FA_REGISTERED = 'fa-registered';
    const FA_CREATIVE_COMMONS = 'fa-creative-commons';
    const FA_GG = 'fa-gg';
    const FA_GG_CIRCLE = 'fa-gg-circle';
    const FA_TRIPADVISOR = 'fa-tripadvisor';
    const FA_ODNOKLASSNIKI = 'fa-odnoklassniki';
    const FA_ODNOKLASSNIKI_SQUARE = 'fa-odnoklassniki-square';
    const FA_GET_POCKET = 'fa-get-pocket';
    const FA_WIKIPEDIA_W = 'fa-wikipedia-w';
    const FA_SAFARI = 'fa-safari';
    const FA_CHROME = 'fa-chrome';
    const FA_FIREFOX = 'fa-firefox';
    const FA_OPERA = 'fa-opera';
    const FA_INTERNET_EXPLORER = 'fa-internet-explorer';
    const FA_TELEVISION = 'fa-television';
    const FA_CONTAO = 'fa-contao';
    const FA_500PX = 'fa-500px';
    const FA_AMAZON = 'fa-amazon';
    const FA_CALENDAR_PLUS_O = 'fa-calendar-plus-o';
    const FA_CALENDAR_MINUS_O = 'fa-calendar-minus-o';
    const FA_CALENDAR_TIMES_O = 'fa-calendar-times-o';
    const FA_CALENDAR_CHECK_O = 'fa-calendar-check-o';
    const FA_INDUSTRY = 'fa-industry';
    const FA_MAP_PIN = 'fa-map-pin';
    const FA_MAP_SIGNS = 'fa-map-signs';
    const FA_MAP_O = 'fa-map-o';
    const FA_MAP = 'fa-map';
    const FA_COMMENTING = 'fa-commenting';
    const FA_COMMENTING_O = 'fa-commenting-o';
    const FA_HOUZZ = 'fa-houzz';
    const FA_VIMEO = 'fa-vimeo';
    const FA_BLACK_TIE = 'fa-black-tie';
    const FA_FONTICONS = 'fa-fonticons';
    const FA_REDDIT_ALIEN = 'fa-reddit-alien';
    const FA_EDGE = 'fa-edge';
    const FA_CREDIT_CARD_ALT = 'fa-credit-card-alt';
    const FA_CODIEPIE = 'fa-codiepie';
    const FA_MODX = 'fa-modx';
    const FA_FORT_AWESOME = 'fa-fort-awesome';
    const FA_USB = 'fa-usb';
    const FA_PRODUCT_HUNT = 'fa-product-hunt';
    const FA_MIXCLOUD = 'fa-mixcloud';
    const FA_SCRIBD = 'fa-scribd';
    const FA_PAUSE_CIRCLE = 'fa-pause-circle';
    const FA_PAUSE_CIRCLE_O = 'fa-pause-circle-o';
    const FA_STOP_CIRCLE = 'fa-stop-circle';
    const FA_STOP_CIRCLE_O = 'fa-stop-circle-o';
    const FA_SHOPPING_BAG = 'fa-shopping-bag';
    const FA_SHOPPING_BASKET = 'fa-shopping-basket';
    const FA_HASHTAG = 'fa-hashtag';
    const FA_BLUETOOTH = 'fa-bluetooth';
    const FA_BLUETOOTH_B = 'fa-bluetooth-b';
    const FA_PERCENT = 'fa-percent';

    /**
     * @param $icon
     * @param array $options
     * @param string $tag
     * @param string $content
     * @return mixed
     */
    public static function render($icon, $options = [], $tag = 'span', $content = '')
    {
        $options = static::getOptions($icon, $options);

        return parent::renderTag($tag, $content, $options);
    }

    /**
     * @param $icon
     * @param array $options
     * @return array
     */
    private static function getOptions($icon, $options = [])
    {
        $options['class'] = 'fa ' . $icon . ' ' . ArrayHelper::getValue($options, 'class', '');

        return $options;
    }
}