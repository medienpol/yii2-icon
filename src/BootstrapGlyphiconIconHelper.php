<?php

namespace medienpol\yii2icon;

use medienpol\yii2icon\base\BaseIconHelper;
use yii\helpers\ArrayHelper;

/**
 * Class BootstrapGlyphiconIconHelper
 * @package medienpol\yii2icon
 *
 * Provides rendering of Bootstrap Glyphicon icons.
 */
class BootstrapGlyphiconIconHelper extends BaseIconHelper
{

    const BS_GLYPHICON_ASTERISK = 'glyphicon-asterisk';
    const BS_GLYPHICON_PLUS = 'glyphicon-plus';
    const BS_GLYPHICON_EURO = 'glyphicon-euro';
    const BS_GLYPHICON_MINUS = 'glyphicon-minus';
    const BS_GLYPHICON_CLOUD = 'glyphicon-cloud';
    const BS_GLYPHICON_ENVELOPE = 'glyphicon-envelope';
    const BS_GLYPHICON_PENCIL = 'glyphicon-pencil';
    const BS_GLYPHICON_GLASS = 'glyphicon-glass';
    const BS_GLYPHICON_MUSIC = 'glyphicon-music';
    const BS_GLYPHICON_SEARCH = 'glyphicon-search';
    const BS_GLYPHICON_HEART = 'glyphicon-heart';
    const BS_GLYPHICON_STAR = 'glyphicon-star';
    const BS_GLYPHICON_STAR_EMPTY = 'glyphicon-star-empty';
    const BS_GLYPHICON_USER = 'glyphicon-user';
    const BS_GLYPHICON_FILM = 'glyphicon-film';
    const BS_GLYPHICON_TH_LARGE = 'glyphicon-th-large';
    const BS_GLYPHICON_TH = 'glyphicon-th';
    const BS_GLYPHICON_TH_LIST = 'glyphicon-th-list';
    const BS_GLYPHICON_OK = 'glyphicon-ok';
    const BS_GLYPHICON_REMOVE = 'glyphicon-remove';
    const BS_GLYPHICON_ZOOM_IN = 'glyphicon-zoom-in';
    const BS_GLYPHICON_ZOOM_OUT = 'glyphicon-zoom-out';
    const BS_GLYPHICON_OFF = 'glyphicon-off';
    const BS_GLYPHICON_SIGNAL = 'glyphicon-signal';
    const BS_GLYPHICON_COG = 'glyphicon-cog';
    const BS_GLYPHICON_TRASH = 'glyphicon-trash';
    const BS_GLYPHICON_HOME = 'glyphicon-home';
    const BS_GLYPHICON_FILE = 'glyphicon-file';
    const BS_GLYPHICON_TIME = 'glyphicon-time';
    const BS_GLYPHICON_ROAD = 'glyphicon-road';
    const BS_GLYPHICON_DOWNLOAD_ALT = 'glyphicon-download-alt';
    const BS_GLYPHICON_DOWNLOAD = 'glyphicon-download';
    const BS_GLYPHICON_UPLOAD = 'glyphicon-upload';
    const BS_GLYPHICON_INBOX = 'glyphicon-inbox';
    const BS_GLYPHICON_PLAY_CIRCLE = 'glyphicon-play-circle';
    const BS_GLYPHICON_REPEAT = 'glyphicon-repeat';
    const BS_GLYPHICON_REFRESH = 'glyphicon-refresh';
    const BS_GLYPHICON_LIST_ALT = 'glyphicon-list-alt';
    const BS_GLYPHICON_LOCK = 'glyphicon-lock';
    const BS_GLYPHICON_FLAG = 'glyphicon-flag';
    const BS_GLYPHICON_HEADPHONES = 'glyphicon-headphones';
    const BS_GLYPHICON_VOLUME_OFF = 'glyphicon-volume-off';
    const BS_GLYPHICON_VOLUME_DOWN = 'glyphicon-volume-down';
    const BS_GLYPHICON_VOLUME_UP = 'glyphicon-volume-up';
    const BS_GLYPHICON_QRCODE = 'glyphicon-qrcode';
    const BS_GLYPHICON_BARCODE = 'glyphicon-barcode';
    const BS_GLYPHICON_TAG = 'glyphicon-tag';
    const BS_GLYPHICON_TAGS = 'glyphicon-tags';
    const BS_GLYPHICON_BOOK = 'glyphicon-book';
    const BS_GLYPHICON_BOOKMARK = 'glyphicon-bookmark';
    const BS_GLYPHICON_PRINT = 'glyphicon-print';
    const BS_GLYPHICON_CAMERA = 'glyphicon-camera';
    const BS_GLYPHICON_FONT = 'glyphicon-font';
    const BS_GLYPHICON_BOLD = 'glyphicon-bold';
    const BS_GLYPHICON_ITALIC = 'glyphicon-italic';
    const BS_GLYPHICON_TEXT_HEIGHT = 'glyphicon-text-height';
    const BS_GLYPHICON_TEXT_WIDTH = 'glyphicon-text-width';
    const BS_GLYPHICON_ALIGN_LEFT = 'glyphicon-align-left';
    const BS_GLYPHICON_ALIGN_CENTER = 'glyphicon-align-center';
    const BS_GLYPHICON_ALIGN_RIGHT = 'glyphicon-align-right';
    const BS_GLYPHICON_ALIGN_JUSTIFY = 'glyphicon-align-justify';
    const BS_GLYPHICON_LIST = 'glyphicon-list';
    const BS_GLYPHICON_INDENT_LEFT = 'glyphicon-indent-left';
    const BS_GLYPHICON_INDENT_RIGHT = 'glyphicon-indent-right';
    const BS_GLYPHICON_FACETIME_VIDEO = 'glyphicon-facetime-video';
    const BS_GLYPHICON_PICTURE = 'glyphicon-picture';
    const BS_GLYPHICON_MAP_MARKER = 'glyphicon-map-marker';
    const BS_GLYPHICON_ADJUST = 'glyphicon-adjust';
    const BS_GLYPHICON_TINT = 'glyphicon-tint';
    const BS_GLYPHICON_EDIT = 'glyphicon-edit';
    const BS_GLYPHICON_SHARE = 'glyphicon-share';
    const BS_GLYPHICON_CHECK = 'glyphicon-check';
    const BS_GLYPHICON_MOVE = 'glyphicon-move';
    const BS_GLYPHICON_STEP_BACKWARD = 'glyphicon-step-backward';
    const BS_GLYPHICON_FAST_BACKWARD = 'glyphicon-fast-backward';
    const BS_GLYPHICON_BACKWARD = 'glyphicon-backward';
    const BS_GLYPHICON_PLAY = 'glyphicon-play';
    const BS_GLYPHICON_PAUSE = 'glyphicon-pause';
    const BS_GLYPHICON_STOP = 'glyphicon-stop';
    const BS_GLYPHICON_FORWARD = 'glyphicon-forward';
    const BS_GLYPHICON_FAST_FORWARD = 'glyphicon-fast-forward';
    const BS_GLYPHICON_STEP_FORWARD = 'glyphicon-step-forward';
    const BS_GLYPHICON_EJECT = 'glyphicon-eject';
    const BS_GLYPHICON_CHEVRON_LEFT = 'glyphicon-chevron-left';
    const BS_GLYPHICON_CHEVRON_RIGHT = 'glyphicon-chevron-right';
    const BS_GLYPHICON_PLUS_SIGN = 'glyphicon-plus-sign';
    const BS_GLYPHICON_MINUS_SIGN = 'glyphicon-minus-sign';
    const BS_GLYPHICON_REMOVE_SIGN = 'glyphicon-remove-sign';
    const BS_GLYPHICON_OK_SIGN = 'glyphicon-ok-sign';
    const BS_GLYPHICON_QUESTION_SIGN = 'glyphicon-question-sign';
    const BS_GLYPHICON_INFO_SIGN = 'glyphicon-info-sign';
    const BS_GLYPHICON_SCREENSHOT = 'glyphicon-screenshot';
    const BS_GLYPHICON_REMOVE_CIRCLE = 'glyphicon-remove-circle';
    const BS_GLYPHICON_OK_CIRCLE = 'glyphicon-ok-circle';
    const BS_GLYPHICON_BAN_CIRCLE = 'glyphicon-ban-circle';
    const BS_GLYPHICON_ARROW_LEFT = 'glyphicon-arrow-left';
    const BS_GLYPHICON_ARROW_RIGHT = 'glyphicon-arrow-right';
    const BS_GLYPHICON_ARROW_UP = 'glyphicon-arrow-up';
    const BS_GLYPHICON_ARROW_DOWN = 'glyphicon-arrow-down';
    const BS_GLYPHICON_SHARE_ALT = 'glyphicon-share-alt';
    const BS_GLYPHICON_RESIZE_FULL = 'glyphicon-resize-full';
    const BS_GLYPHICON_RESIZE_SMALL = 'glyphicon-resize-small';
    const BS_GLYPHICON_EXCLAMATION_SIGN = 'glyphicon-exclamation-sign';
    const BS_GLYPHICON_GIFT = 'glyphicon-gift';
    const BS_GLYPHICON_LEAF = 'glyphicon-leaf';
    const BS_GLYPHICON_FIRE = 'glyphicon-fire';
    const BS_GLYPHICON_EYE_OPEN = 'glyphicon-eye-open';
    const BS_GLYPHICON_EYE_CLOSE = 'glyphicon-eye-close';
    const BS_GLYPHICON_WARNING_SIGN = 'glyphicon-warning-sign';
    const BS_GLYPHICON_PLANE = 'glyphicon-plane';
    const BS_GLYPHICON_CALENDAR = 'glyphicon-calendar';
    const BS_GLYPHICON_RANDOM = 'glyphicon-random';
    const BS_GLYPHICON_COMMENT = 'glyphicon-comment';
    const BS_GLYPHICON_MAGNET = 'glyphicon-magnet';
    const BS_GLYPHICON_CHEVRON_UP = 'glyphicon-chevron-up';
    const BS_GLYPHICON_CHEVRON_DOWN = 'glyphicon-chevron-down';
    const BS_GLYPHICON_RETWEET = 'glyphicon-retweet';
    const BS_GLYPHICON_SHOPPING_CART = 'glyphicon-shopping-cart';
    const BS_GLYPHICON_FOLDER_CLOSE = 'glyphicon-folder-close';
    const BS_GLYPHICON_FOLDER_OPEN = 'glyphicon-folder-open';
    const BS_GLYPHICON_RESIZE_VERTICAL = 'glyphicon-resize-vertical';
    const BS_GLYPHICON_RESIZE_HORIZONTAL = 'glyphicon-resize-horizontal';
    const BS_GLYPHICON_HDD = 'glyphicon-hdd';
    const BS_GLYPHICON_BULLHORN = 'glyphicon-bullhorn';
    const BS_GLYPHICON_BELL = 'glyphicon-bell';
    const BS_GLYPHICON_CERTIFICATE = 'glyphicon-certificate';
    const BS_GLYPHICON_THUMBS_UP = 'glyphicon-thumbs-up';
    const BS_GLYPHICON_THUMBS_DOWN = 'glyphicon-thumbs-down';
    const BS_GLYPHICON_HAND_RIGHT = 'glyphicon-hand-right';
    const BS_GLYPHICON_HAND_LEFT = 'glyphicon-hand-left';
    const BS_GLYPHICON_HAND_UP = 'glyphicon-hand-up';
    const BS_GLYPHICON_HAND_DOWN = 'glyphicon-hand-down';
    const BS_GLYPHICON_CIRCLE_ARROW_RIGHT = 'glyphicon-circle-arrow-right';
    const BS_GLYPHICON_CIRCLE_ARROW_LEFT = 'glyphicon-circle-arrow-left';
    const BS_GLYPHICON_CIRCLE_ARROW_UP = 'glyphicon-circle-arrow-up';
    const BS_GLYPHICON_CIRCLE_ARROW_DOWN = 'glyphicon-circle-arrow-down';
    const BS_GLYPHICON_GLOBE = 'glyphicon-globe';
    const BS_GLYPHICON_WRENCH = 'glyphicon-wrench';
    const BS_GLYPHICON_TASKS = 'glyphicon-tasks';
    const BS_GLYPHICON_FILTER = 'glyphicon-filter';
    const BS_GLYPHICON_BRIEFCASE = 'glyphicon-briefcase';
    const BS_GLYPHICON_FULLSCREEN = 'glyphicon-fullscreen';
    const BS_GLYPHICON_DASHBOARD = 'glyphicon-dashboard';
    const BS_GLYPHICON_PAPERCLIP = 'glyphicon-paperclip';
    const BS_GLYPHICON_HEART_EMPTY = 'glyphicon-heart-empty';
    const BS_GLYPHICON_LINK = 'glyphicon-link';
    const BS_GLYPHICON_PHONE = 'glyphicon-phone';
    const BS_GLYPHICON_PUSHPIN = 'glyphicon-pushpin';
    const BS_GLYPHICON_USD = 'glyphicon-usd';
    const BS_GLYPHICON_GBP = 'glyphicon-gbp';
    const BS_GLYPHICON_SORT = 'glyphicon-sort';
    const BS_GLYPHICON_SORT_BY_ALPHABET = 'glyphicon-sort-by-alphabet';
    const BS_GLYPHICON_SORT_BY_ALPHABET_ALT = 'glyphicon-sort-by-alphabet-alt';
    const BS_GLYPHICON_SORT_BY_ORDER = 'glyphicon-sort-by-order';
    const BS_GLYPHICON_SORT_BY_ORDER_ALT = 'glyphicon-sort-by-order-alt';
    const BS_GLYPHICON_SORT_BY_ATTRIBUTES = 'glyphicon-sort-by-attributes';
    const BS_GLYPHICON_SORT_BY_ATTRIBUTES_ALT = 'glyphicon-sort-by-attributes-alt';
    const BS_GLYPHICON_UNCHECKED = 'glyphicon-unchecked';
    const BS_GLYPHICON_EXPAND = 'glyphicon-expand';
    const BS_GLYPHICON_COLLAPSE_DOWN = 'glyphicon-collapse-down';
    const BS_GLYPHICON_COLLAPSE_UP = 'glyphicon-collapse-up';
    const BS_GLYPHICON_LOG_IN = 'glyphicon-log-in';
    const BS_GLYPHICON_FLASH = 'glyphicon-flash';
    const BS_GLYPHICON_LOG_OUT = 'glyphicon-log-out';
    const BS_GLYPHICON_NEW_WINDOW = 'glyphicon-new-window';
    const BS_GLYPHICON_RECORD = 'glyphicon-record';
    const BS_GLYPHICON_SAVE = 'glyphicon-save';
    const BS_GLYPHICON_OPEN = 'glyphicon-open';
    const BS_GLYPHICON_SAVED = 'glyphicon-saved';
    const BS_GLYPHICON_IMPORT = 'glyphicon-import';
    const BS_GLYPHICON_EXPORT = 'glyphicon-export';
    const BS_GLYPHICON_SEND = 'glyphicon-send';
    const BS_GLYPHICON_FLOPPY_DISK = 'glyphicon-floppy-disk';
    const BS_GLYPHICON_FLOPPY_SAVED = 'glyphicon-floppy-saved';
    const BS_GLYPHICON_FLOPPY_REMOVE = 'glyphicon-floppy-remove';
    const BS_GLYPHICON_FLOPPY_SAVE = 'glyphicon-floppy-save';
    const BS_GLYPHICON_FLOPPY_OPEN = 'glyphicon-floppy-open';
    const BS_GLYPHICON_CREDIT_CARD = 'glyphicon-credit-card';
    const BS_GLYPHICON_TRANSFER = 'glyphicon-transfer';
    const BS_GLYPHICON_CUTLERY = 'glyphicon-cutlery';
    const BS_GLYPHICON_HEADER = 'glyphicon-header';
    const BS_GLYPHICON_COMPRESSED = 'glyphicon-compressed';
    const BS_GLYPHICON_EARPHONE = 'glyphicon-earphone';
    const BS_GLYPHICON_PHONE_ALT = 'glyphicon-phone-alt';
    const BS_GLYPHICON_TOWER = 'glyphicon-tower';
    const BS_GLYPHICON_STATS = 'glyphicon-stats';
    const BS_GLYPHICON_SD_VIDEO = 'glyphicon-sd-video';
    const BS_GLYPHICON_HD_VIDEO = 'glyphicon-hd-video';
    const BS_GLYPHICON_SUBTITLES = 'glyphicon-subtitles';
    const BS_GLYPHICON_SOUND_STEREO = 'glyphicon-sound-stereo';
    const BS_GLYPHICON_SOUND_DOLBY = 'glyphicon-sound-dolby';
    const BS_GLYPHICON_COPYRIGHT_MARK = 'glyphicon-copyright-mark';
    const BS_GLYPHICON_REGISTRATION_MARK = 'glyphicon-registration-mark';
    const BS_GLYPHICON_CLOUD_DOWNLOAD = 'glyphicon-cloud-download';
    const BS_GLYPHICON_CLOUD_UPLOAD = 'glyphicon-cloud-upload';
    const BS_GLYPHICON_TREE_CONIFER = 'glyphicon-tree-conifer';
    const BS_GLYPHICON_TREE_DECIDUOUS = 'glyphicon-tree-deciduous';
    const BS_GLYPHICON_CD = 'glyphicon-cd';
    const BS_GLYPHICON_SAVE_FILE = 'glyphicon-save-file';
    const BS_GLYPHICON_OPEN_FILE = 'glyphicon-open-file';
    const BS_GLYPHICON_LEVEL_UP = 'glyphicon-level-up';
    const BS_GLYPHICON_COPY = 'glyphicon-copy';
    const BS_GLYPHICON_PASTE = 'glyphicon-paste';
    const BS_GLYPHICON_ALERT = 'glyphicon-alert';
    const BS_GLYPHICON_EQUALIZER = 'glyphicon-equalizer';
    const BS_GLYPHICON_KING = 'glyphicon-king';
    const BS_GLYPHICON_QUEEN = 'glyphicon-queen';
    const BS_GLYPHICON_PAWN = 'glyphicon-pawn';
    const BS_GLYPHICON_BISHOP = 'glyphicon-bishop';
    const BS_GLYPHICON_KNIGHT = 'glyphicon-knight';
    const BS_GLYPHICON_BABY_FORMULA = 'glyphicon-baby-formula';
    const BS_GLYPHICON_TENT = 'glyphicon-tent';
    const BS_GLYPHICON_BLACKBOARD = 'glyphicon-blackboard';
    const BS_GLYPHICON_BED = 'glyphicon-bed';
    const BS_GLYPHICON_APPLE = 'glyphicon-apple';
    const BS_GLYPHICON_ERASE = 'glyphicon-erase';
    const BS_GLYPHICON_HOURGLASS = 'glyphicon-hourglass';
    const BS_GLYPHICON_LAMP = 'glyphicon-lamp';
    const BS_GLYPHICON_DUPLICATE = 'glyphicon-duplicate';
    const BS_GLYPHICON_PIGGY_BANK = 'glyphicon-piggy-bank';
    const BS_GLYPHICON_SCISSORS = 'glyphicon-scissors';
    const BS_GLYPHICON_BITCOIN = 'glyphicon-bitcoin';
    const BS_GLYPHICON_BTC = 'glyphicon-btc';
    const BS_GLYPHICON_XBT = 'glyphicon-xbt';
    const BS_GLYPHICON_YEN = 'glyphicon-yen';
    const BS_GLYPHICON_JPY = 'glyphicon-jpy';
    const BS_GLYPHICON_RUBLE = 'glyphicon-ruble';
    const BS_GLYPHICON_RUB = 'glyphicon-rub';
    const BS_GLYPHICON_SCALE = 'glyphicon-scale';
    const BS_GLYPHICON_ICE_LOLLY = 'glyphicon-ice-lolly';
    const BS_GLYPHICON_ICE_LOLLY_TASTED = 'glyphicon-ice-lolly-tasted';
    const BS_GLYPHICON_EDUCATION = 'glyphicon-education';
    const BS_GLYPHICON_OPTION_HORIZONTAL = 'glyphicon-option-horizontal';
    const BS_GLYPHICON_OPTION_VERTICAL = 'glyphicon-option-vertical';
    const BS_GLYPHICON_MENU_HAMBURGER = 'glyphicon-menu-hamburger';
    const BS_GLYPHICON_MODAL_WINDOW = 'glyphicon-modal-window';
    const BS_GLYPHICON_OIL = 'glyphicon-oil';
    const BS_GLYPHICON_GRAIN = 'glyphicon-grain';
    const BS_GLYPHICON_SUNGLASSES = 'glyphicon-sunglasses';
    const BS_GLYPHICON_TEXT_SIZE = 'glyphicon-text-size';
    const BS_GLYPHICON_TEXT_COLOR = 'glyphicon-text-color';
    const BS_GLYPHICON_TEXT_BACKGROUND = 'glyphicon-text-background';
    const BS_GLYPHICON_OBJECT_ALIGN_TOP = 'glyphicon-object-align-top';
    const BS_GLYPHICON_OBJECT_ALIGN_BOTTOM = 'glyphicon-object-align-bottom';
    const BS_GLYPHICON_OBJECT_ALIGN_HORIZONTAL = 'glyphicon-object-align-horizontal';
    const BS_GLYPHICON_OBJECT_ALIGN_LEFT = 'glyphicon-object-align-left';
    const BS_GLYPHICON_OBJECT_ALIGN_VERTICAL = 'glyphicon-object-align-vertical';
    const BS_GLYPHICON_OBJECT_ALIGN_RIGHT = 'glyphicon-object-align-right';
    const BS_GLYPHICON_TRIANGLE_RIGHT = 'glyphicon-triangle-right';
    const BS_GLYPHICON_TRIANGLE_LEFT = 'glyphicon-triangle-left';
    const BS_GLYPHICON_TRIANGLE_BOTTOM = 'glyphicon-triangle-bottom';
    const BS_GLYPHICON_TRIANGLE_TOP = 'glyphicon-triangle-top';
    const BS_GLYPHICON_CONSOLE = 'glyphicon-console';
    const BS_GLYPHICON_SUPERSCRIPT = 'glyphicon-superscript';
    const BS_GLYPHICON_SUBSCRIPT = 'glyphicon-subscript';
    const BS_GLYPHICON_MENU_LEFT = 'glyphicon-menu-left';
    const BS_GLYPHICON_MENU_RIGHT = 'glyphicon-menu-right';
    const BS_GLYPHICON_MENU_DOWN = 'glyphicon-menu-down';
    const BS_GLYPHICON_MENU_UP = 'glyphicon-menu-up';

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
        $options['class'] = 'glyphicon ' . $icon . ' ' . ArrayHelper::getValue($options, 'class', '');

        return $options;
    }
}
