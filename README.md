# Buto-Plugin-SpecList
- List files to be render with plugin readme/yml.
- Items listed in table and item open in new window.

## Settings
```
plugin_modules:
  spec:
    plugin: 'spec/list'
    settings:
```
Admin layout (optional).
```
      admin_layout: /theme/[theme]/layout/main_bs4.yml
```
Item path.
```
      item: '/../buto_data/theme/[theme]/plugin_spec_list.yml'
```

## plugin_spec_list.yml
```
item:
  -
    name: Invoice
    path: /plugin/invoice/spec/data/spec.yml 
```
