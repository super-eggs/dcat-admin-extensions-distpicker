> 此包不再维护，请使用 [super-eggs/dcat-distpicker](https://github.com/super-eggs/dcat-distpicker).  

# dcat-admin extension

[Distpicker](https://github.com/fengyuanchen/distpicker)是一个中国省市区三级联动选择组件，这个包是基于`Distpicker`的`dcat-admin`扩展，用来将`Distpicker`集成进`dcat-admin`的表单中，本包参考了[laravel-admin-extensions](https://github.com/laravel-admin-extensions)/**[china-distpicker](https://github.com/laravel-admin-extensions/china-distpicker)**

## 截图

![image-20200628150204971](https://tva1.sinaimg.cn/large/007S8ZIlly1gg80kgiwpcj32000iajt9.jpg)

## 安装

首先

```composer require super-eggs/dcat-admin-extensions-distpicker```

然后

```php artisan admin:import dcat-admin-extensions-distpicker```



## 开启扩展

后台开启

![image-20200628150337687](https://tva1.sinaimg.cn/large/007S8ZIlly1gg80m0xbf8j321m0iaq5b.jpg)



## 使用

### 表单中使用

比如在表中有三个字段`province_id`, `city_id`, `district_id`, 在form表单中使用它：

```
$form->distpicker(['province_id', 'city_id', 'district_id']);
```

设置默认值

```
$form->distpicker([
    'province_id' => '省份',
    'city_id' => '市',
    'district_id' => '区'
], '地域选择')->default([
    'province' => 130000,
    'city'     => 130200,
    'district' => 130203,
]);
```

可以设置每个字段的placeholder

```
$form->distpicker([
    'province_id' => '省',
    'city_id'     => '市',
    'district_id' => '区'
]);
```

设置label

```
$form->distpicker(['province_id', 'city_id', 'district_id'], '请选择区域');
```

设置自动选择, 可以设置1,2,3 表示自动选择到第几级

```
$form->distpicker(['province_id', 'city_id', 'district_id'])->autoselect(1);
```

### 表格筛选中使用

```
$filter->distpicker('province_id', 'city_id', 'district_id', '地域选择');
```

## 地区编码数据

[Distpicker](https://github.com/fengyuanchen/distpicker)所使用的地域编码是基于国家统计局发布的数据, 数据字典为`china_area.sql`文件.

## 下一步开发计划

可以自定义调整为一级、二级；
