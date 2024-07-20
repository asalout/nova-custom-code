import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-index-code-field', IndexField)
  app.component('detail-index-code-field', DetailField)
  app.component('form-index-code-field', FormField)
})
