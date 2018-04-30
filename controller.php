<?php
declare(strict_types=1);
/**
 * Shake Json Validator.
 * Better php code equals better web applications.
 *
 * @license <https://github.com/shake-php/json-validator/blob/master/LICENSE>.
 * @link    <https://github.com/shake-php/json-validator>.
 */

function validate_shake_json(string $jsonText): bool {
    return ShakeValidator::valid($jsonText);
}
