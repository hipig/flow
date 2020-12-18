import Locale from "./locale/zh-cn"

const FilePond = require('filepond/dist/filepond')

FilePond.setOptions({
  ...Locale,
  credits: null
})

window.FilePond = FilePond
