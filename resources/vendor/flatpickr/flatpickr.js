const flatpickr = require('flatpickr')
const zhCN = require('flatpickr/dist/l10n/zh').default.zh

flatpickr.localize(zhCN)

window.flatpickr = flatpickr
