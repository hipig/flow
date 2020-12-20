const FilePond = require('filepond/dist/filepond')
const zhCN = require('./locale/zh-cn').default

FilePond.setOptions({
  ...zhCN,
  credits: null
})

window.FilePond = FilePond
