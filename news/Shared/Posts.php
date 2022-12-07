<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */
namespace NukeViet\Module\news\Shared;

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

/**
 * @author VINADES.,JSC <contact@vinades.vn>
 *
 */
class Posts
{
    const STATUS_DEACTIVE = 0; // Ngưng hiệu lực
    const STATUS_PUBLISH = 1; // Xuất bản
    const STATUS_WAITING = 2; // Hẹn giờ đăng
    const STATUS_EXPIRED = 3; // Hết hạn
    const STATUS_DRAFT = 4; // Lưu nháp
    const STATUS_REVIEW_TRANSFER = 5; // Chuyển duyệt bài
    const STATUS_REVIEW_REJECT = 6; // Từ chối duyệt bài
    const STATUS_REVIEWING = 7; // Đang duyệt bài
    const STATUS_PUBLISH_TRANSFER = 8; // Chuyển đăng bài
    const STATUS_PUBLISH_REJECT = 9; // Từ chối đăng bài
    const STATUS_PUBLISH_CHECKING = 10; // Đang kiểm tra để đăng
    const STATUS_LOCKING = 21; // Đang khóa bởi chuyên mục
}
