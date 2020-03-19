<?php

function validateId(string $patientId) {
    if (!preg_match('/^\d+$/', $patientId)
        || strlen($patientId) !== 10) {
        return 'Patient ID must contain 10 positive whole numbers.';
    } elseif (strlen($patientId) !== 10) {
        return 'Field must have exactly 10 numbers.';
    } elseif ($patientId === '1111111111'
        || $patientId === '2222222222'
        || $patientId === '3333333333'
        || $patientId === '4444444444'
        || $patientId === '5555555555'
        || $patientId === '6666666666'
        || $patientId === '7777777777'
        || $patientId === '8888888888'
        || $patientId === '9999999999'
        || $patientId === '0000000000') {
        return 'Field must not have the same number 10 times.';
    } else {
        return 'Patient ID accepted.';
    }
}

echo validateId('1111111111');