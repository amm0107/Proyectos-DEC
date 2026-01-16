<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marca;
use App\Models\Modelo;

class ModelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $yamaha = Marca ::create(['nombre' => 'Yamaha']);
        $honda = Marca ::create(['nombre' => 'Honda']);
        $suzuki = Marca ::create(['nombre' => 'Suzuki']);
        $kawasaki = Marca ::create(['nombre' => 'Kawasaki']);
        $aprilia = Marca ::create(['nombre' => 'Aprilia']);
        $ducati = Marca ::create(['nombre' => 'Ducati']);

        $modelos = [
            // Yamaha
            Modelo::create([
                'nombre' => 'YZF-R1',
                'marca_id' => $yamaha->id,
                'precio' => 17399,
                'imagen' => 'https://www.motoscortes.com/wp-content/uploads/2024/09/2025-Yamaha-YZF1000R1.webp',
                'url_compra' => 'https://www.yamaha.com/r1'
            ]),
            Modelo::create([
                'nombre' => 'MT-07',
                'marca_id' => $yamaha->id,
                'precio' => 7599,
                'imagen' => 'https://www.motoplanete.com/yamaha/zoom-700px/10900-MT-07-700-2025-1000px.webp',
                'url_compra' => 'https://www.yamaha.com/mt07'
            ]),
            Modelo::create([
                'nombre' => 'Tenere 700',
                'marca_id' => $yamaha->id,
                'precio' => 9999,
                'imagen' => 'https://motoriwata.com/wp-content/uploads/2021/02/2025-Yamaha-XTZ700-EU-Icon_Blue-360-Degrees-001-03.jpg',
                'url_compra' => 'https://www.yamaha.com/tenere700'
            ]),
            Modelo::create([
                'nombre' => 'XSR900',
                'marca_id' => $yamaha->id,
                'precio' => 9999,
                'imagen' => 'https://www.vferrer.com/wp-content/uploads/2017/07/yamaha-xsr900-color1.jpg',
                'url_compra' => 'https://www.yamaha.com/xsr900'
            ]),
            Modelo::create([
                'nombre' => 'FZ-09',
                'marca_id' => $yamaha->id,
                'precio' => 8999,
                'imagen' => 'https://www.yamahamotormex.com/motos/fz%20series/fz09roja.png',
                'url_compra' => 'https://www.yamaha.com/fz09'
            ]),
            Modelo::create([
                'nombre' => 'Bolt R-Spec',
                'marca_id' => $yamaha->id,
                'precio' => 8999,
                'imagen' => 'https://cdn.dealerspike.com/imglib/v1/800x600/imglib/Assets/Inventory/80/21/80212741-9BA1-4DA0-B4A4-672AAF39AF93.jpg',
                'url_compra' => 'https://www.yamaha.com/bolt_rspec'
            ]),
            Modelo::create([
                'nombre' => 'V-Star 250',
                'marca_id' => $yamaha->id,
                'precio' => 4499,
                'imagen' => 'https://www.motofichas.com.mx/images/phocagallery/Yamaha_Motor_Corporation/XVS_250_Vstar/XVS_250_Vstar_1.jpg',
                'url_compra' => 'https://www.yamaha.com/vstar250'
            ]),
            Modelo::create([
                'nombre' => 'SR400',
                'marca_id' => $yamaha->id,
                'precio' => 5499,
                'imagen' => 'https://global-fs.webike-cdn.net/catalogue/images/134569/Q5KYSK008S62_01_02_SVA.jpg',
                'url_compra' => 'https://www.yamaha.com/sr400'
            ]),
            Modelo::create([
                'nombre' => 'MT-09',
                'marca_id' => $yamaha->id,
                'precio' => 9999,
                'imagen' => 'https://www.motospares.es/wp-content/uploads/2022/02/2022-Yamaha-MT09-EU-Icon_Blue-Studio-001-03.jpeg',
                'url_compra' => 'https://www.yamaha.com/mt09'
            ]),
            Modelo::create([
                'nombre' => 'R3',
                'marca_id' => $yamaha->id,
                'precio' => 5399,
                'imagen' => 'https://www.motoscortes.com/wp-content/uploads/2024/12/YAMAHA-R3-2025-8.webp',
                'url_compra' => 'https://www.yamaha.com/r3'
            ]),
            Modelo::create([
                'nombre' => 'MT-10',
                'marca_id' => $yamaha->id,
                'precio' => 13999,
                'imagen' => 'https://lafactoryracing.com/wp-content/uploads/2023/11/Hyper-naked-MT-10-2022-Yamaha-la-factory-racing-2.jpg',
                'url_compra' => 'https://www.yamaha.com/mt10'
            ]),
            Modelo::create([
                'nombre' => 'Tracer 9',
                'marca_id' => $yamaha->id,
                'precio' => 11999,
                'imagen' => 'https://cdn2.yamaha-motor.eu/prod/product-assets/2025/MT09ATRS/2025-Yamaha-MT09ATRS-EU-Redline-360-Degrees-001-03_Mobile.jpg',
                'url_compra' => 'https://www.yamaha.com/tracer9'
            ]),
            Modelo::create([
                'nombre' => 'XMAX 300',
                'marca_id' => $yamaha->id,
                'precio' => 5799,
                'imagen' => 'https://www.vferrer.com/wp-content/uploads/2021/01/yamaha-xmax-300-tech-max-color1.jpg',
                'url_compra' => 'https://www.yamaha.com/xmax300'
            ]),
            Modelo::create([
                'nombre' => 'FJR1300',
                'marca_id' => $yamaha->id,
                'precio' => 18999,
                'imagen' => 'https://soymotero.net/wp-content/uploads/2019/11/fjr_1300_1.jpg',
                'url_compra' => 'https://www.yamaha.com/fjr1300'
            ]),
            Modelo::create([
                'nombre' => 'YZF-R6',
                'marca_id' => $yamaha->id,
                'precio' => 12999,
                'imagen' => 'https://i.blogs.es/a453d6/yamaha-yzf-r6-2017-023/1366_2000.jpg',
                'url_compra' => 'https://www.yamaha.com/r6'
            ]),
            // Honda
            Modelo::create([
                'nombre' => 'CBR1000RR-R Fireblade',
                'marca_id' => $honda->id,
                'precio' => 29999,
                'imagen' => 'https://i.blogs.es/665d8e/honda-cbr1000rr-r-sp-fireblade-2020-014/450_1000.jpg',
                'url_compra' => 'https://www.honda.com/cbr1000rrr'
            ]),
            Modelo::create([
                'nombre' => 'CB500F',
                'marca_id' => $honda->id,
                'precio' => 6999,
                'imagen' => 'https://www.motoplanete.com/honda/millesimes/CB-500/2022_1.webp',
                'url_compra' => 'https://www.honda.com/cb500f'
            ]),
            Modelo::create([
                'nombre' => 'CB650R',
                'marca_id' => $honda->id,
                'precio' => 8999,
                'imagen' => 'https://www.honda.es/content/dam/local/spain/motorcycles/Images/Noticias/HONDA_CB650R-1.jpg/jcr:content/renditions/c3_r.jpg',
                'url_compra' => 'https://www.honda.com/cb650r'
            ]),
            Modelo::create([
                'nombre' => 'CBR500R',
                'marca_id' => $honda->id,
                'precio' => 7499,
                'imagen' => 'https://www.moto1pro.com/sites/default/files/honda_cbr500r-2019.jpg',
                'url_compra' => 'https://www.honda.com/cbr500r'
            ]),
            Modelo::create([
                'nombre' => 'Africa Twin CRF1100L',
                'marca_id' => $honda->id,
                'precio' => 14499,
                'imagen' => 'https://www.motoroads.com/photos/1-big-front-view-honda-crf1100l-africa-twin-motorbike-rental-in-geneva.jpeg',
                'url_compra' => 'https://www.honda.com/africatwin'
            ]),
            Modelo::create([
                'nombre' => 'NC750X',
                'marca_id' => $honda->id,
                'precio' => 8299,
                'imagen' => 'https://www.tiendamotorista.com/87854-large_default/pack-adventure-honda-nc750x-2021-2023-08hme-mkw-advp.jpg',
                'url_compra' => 'https://www.honda.com/nc750x'
            ]),
            Modelo::create([
                'nombre' => 'Rebel 500',
                'marca_id' => $honda->id,
                'precio' => 6399,
                'imagen' => 'https://www.motoplanete.com/honda/zoom-700px/Honda-CMX-500-Rebel-2023-700-px.webp',
                'url_compra' => 'https://www.honda.com/rebel500'
            ]),
            Modelo::create([
                'nombre' => 'CBR600RR',
                'marca_id' => $honda->id,
                'precio' => 11799,
                'imagen' => 'https://www.motorbikemag.es/wp-content/uploads/2020/08/Honda-CBR600RR-2021.jpg',
                'url_compra' => 'https://www.honda.com/cbr600rr'
            ]),
            Modelo::create([
                'nombre' => 'Gold Wing',
                'marca_id' => $honda->id,
                'precio' => 27999,
                'imagen' => 'https://www.moto1pro.com/sites/default/files/captura_de_pantalla_2021-01-08_a_las_10.39.45.png',
                'url_compra' => 'https://www.honda.com/goldwing'
            ]),
            Modelo::create([
                'nombre' => 'CBR300R',
                'marca_id' => $honda->id,
                'precio' => 4599,
                'imagen' => 'https://motos.espirituracer.com/archivos/2020/06/honda-cbr-300-r-5.jpeg',
                'url_compra' => 'https://www.honda.com/cbr300r'
            ]),
            Modelo::create([
                'nombre' => 'CRF450L',
                'marca_id' => $honda->id,
                'precio' => 9999,
                'imagen' => 'https://www.moto-hobby.com/wp-content/uploads/2019/11/CRF450L-1-1.jpg',
                'url_compra' => 'https://www.honda.com/crf450l'
            ]),
            Modelo::create([
                'nombre' => 'CB1000R',
                'marca_id' => $honda->id,
                'precio' => 11999,
                'imagen' => 'https://www.motoplanete.com/honda/zoom-700px/11044-CB-1000-R-Black-Edition-2025-1000px.webp',
                'url_compra' => 'https://www.honda.com/cb1000r'
            ]),
            Modelo::create([
                'nombre' => 'CTX700',
                'marca_id' => $honda->id,
                'precio' => 6999,
                'imagen' => 'https://motos.espirituracer.com/archivos/2019/08/honda-ctx700-3.jpg',
                'url_compra' => 'https://www.honda.com/ctx700'
            ]),
            Modelo::create([
                'nombre' => 'CBR1000F',
                'marca_id' => $honda->id,
                'precio' => 8999,
                'imagen' => 'https://cdn2.louis.de/dynamic/bikedb/o_pad,w_300,h_300,ha_center,va_center,c_fff::o_extension,e_webp/66.31.6c.359.png',
                'url_compra' => 'https://www.honda.com/cbr1000f'
            ]),
            Modelo::create([
                'nombre' => 'Rebel 300',
                'marca_id' => $honda->id,
                'precio' => 4599,
                'imagen' => 'https://soymotero.net/wp-content/uploads/2018/09/Honda_Rebel_300_2017_02.png',
                'url_compra' => 'https://www.honda.com/rebel300'
            ]),
            // Suzuki
            Modelo::create([
                'nombre' => 'GSX-R1000',
                'marca_id' => $suzuki->id,
                'precio' => 15999,
                'imagen' => 'https://motosmarin.com/wp-content/uploads/2022/12/GSX-R1000-promo-escape-yoshimura.jpg',
                'url_compra' => 'https://www.suzuki.com/gsx-r1000'
            ]),
            Modelo::create([
                'nombre' => 'GSX-R750',
                'marca_id' => $suzuki->id,
                'precio' => 13499,
                'imagen' => 'https://soymotero.net/wp-content/uploads/2018/09/suzuki-gsx-r750.jpg',
                'url_compra' => 'https://www.suzuki.com/gsx-r750'
            ]),
            Modelo::create([
                'nombre' => 'GSX-R600',
                'marca_id' => $suzuki->id,
                'precio' => 11499,
                'imagen' => 'https://a.mcdn.es/mnet_ft/SUZUKI/GSX/1349/19298MG.jpg',
                'url_compra' => 'https://www.suzuki.com/gsx-r600'
            ]),
            Modelo::create([
                'nombre' => 'SV650',
                'marca_id' => $suzuki->id,
                'precio' => 7299,
                'imagen' => 'https://motoproalcobendas.com/wp-content/uploads/2017/01/Suzuki_sv-650-frontolateral-3.1148122.jpg',
                'url_compra' => 'https://www.suzuki.com/sv650'
            ]),
            Modelo::create([
                'nombre' => 'V-Strom 650',
                'marca_id' => $suzuki->id,
                'precio' => 8999,
                'imagen' => 'https://img.motor.mapfre.es/wp-content/uploads/2018/05/suzuki_v_strom_650_abs_con_kit_interurbano_o_de_aventura.jpg',
                'url_compra' => 'https://www.suzuki.com/vstrom650'
            ]),
            Modelo::create([
                'nombre' => 'V-Strom 1000',
                'marca_id' => $suzuki->id,
                'precio' => 12499,
                'imagen' => 'https://www.motofichas.com/images/phocagallery/Suzuki/v-strom-1000-2019/02-suzuki-v-strom-1000-xt-2019-amarillo-perfil.jpg',
                'url_compra' => 'https://www.suzuki.com/vstrom1000'
            ]),
            Modelo::create([
                'nombre' => 'Hayabusa',
                'marca_id' => $suzuki->id,
                'precio' => 18999,
                'imagen' => 'https://moto.motorionline.com/wp-content/uploads/2023/07/Suzuki-Hayabusa-25th-Anniversary-1-1-1024x683.jpg',
                'url_compra' => 'https://www.suzuki.com/hayabusa'
            ]),
            Modelo::create([
                'nombre' => 'GSX-S750',
                'marca_id' => $suzuki->id,
                'precio' => 8299,
                'imagen' => 'https://motos.espirituracer.com/archivos/2019/04/suzuki-gsx-s-750-6.jpg',
                'url_compra' => 'https://www.suzuki.com/gsx-s750'
            ]),
            Modelo::create([
                'nombre' => 'GSX-S1000',
                'marca_id' => $suzuki->id,
                'precio' => 11499,
                'imagen' => 'https://moto.suzuki.es/storage/images/hezrqxeraxzijc7o7ay1hgd3wve0f0jw3vgihe6a.jpg',
                'url_compra' => 'https://www.suzuki.com/gsx-s1000'
            ]),
            Modelo::create([
                'nombre' => 'DR-Z400S',
                'marca_id' => $suzuki->id,
                'precio' => 6799,
                'imagen' => 'https://motos.espirituracer.com/archivos/2019/09/suzuki-drz-400-s-1-1200x900.jpg',
                'url_compra' => 'https://www.suzuki.com/dr-z400s'
            ]),
            Modelo::create([
                'nombre' => 'GSX250R',
                'marca_id' => $suzuki->id,
                'precio' => 4499,
                'imagen' => 'https://www.globalsuzuki.com/motorcycle/smgs/digital-archive/images/2_bike/sports/img_084_1.jpg',
                'url_compra' => 'https://www.suzuki.com/gsx250r'
            ]),
            Modelo::create([
                'nombre' => 'V-Strom 250',
                'marca_id' => $suzuki->id,
                'precio' => 4999,
                'imagen' => 'https://www.motos-zone.com/wp-content/uploads/2023/05/3-2.png',
                'url_compra' => 'https://www.suzuki.com/vstrom250'
            ]),
            Modelo::create([
                'nombre' => 'Burgman 400',
                'marca_id' => $suzuki->id,
                'precio' => 5999,
                'imagen' => 'https://soymotero.net/wp-content/uploads/2019/12/suzuki-burgman-400-2019-01.jpg',
                'url_compra' => 'https://www.suzuki.com/burgman400'
            ]),
            Modelo::create([
                'nombre' => 'GSX-S125',
                'marca_id' => $suzuki->id,
                'precio' => 3999,
                'imagen' => 'https://motoproalcobendas.com/wp-content/uploads/2017/01/Suzuki_gsx-s-125-frontolateral.1667654.jpg',
                'url_compra' => 'https://www.suzuki.com/gsx-s125'
            ]),
            Modelo::create([
                'nombre' => 'RM-Z450',
                'marca_id' => $suzuki->id,
                'precio' => 8999,
                'imagen' => 'https://global-fs.webike-cdn.net/moto_img/cg/12/11503/L_e9b0vripfdh46lm1zj3wonk257.jpg',
                'url_compra' => 'https://www.suzuki.com/rmz450'
            ]),
            // Kawasaki
            Modelo::create([
                'nombre' => 'Ninja ZX-10R',
                'marca_id' => $kawasaki->id,
                'precio' => 16999,
                'imagen' => 'https://media.kawasaki.com/contentstorage/66211693-447c-4b8c-8767-4bbe8f27eb9d.jpg',
                'url_compra' => 'https://www.kawasaki.com/ninja-zx-10r'
            ]),
            Modelo::create([
                'nombre' => 'Ninja ZX-6R',
                'marca_id' => $kawasaki->id,
                'precio' => 9999,
                'imagen' => 'https://centromotopalma.es/storage/app/uploads/public/662/bd9/cba/662bd9cba5a65771921826.jpg',
                'url_compra' => 'https://www.kawasaki.com/ninja-zx-6r'
            ]),
            Modelo::create([
                'nombre' => 'Ninja 400',
                'marca_id' => $kawasaki->id,
                'precio' => 4999,
                'imagen' => 'https://static1.wrs.it/1314032-thickbox_default/silenciador-arrow-pro-race-nichrom-negro-kawasaki-ninja-400-2023.jpg',
                'url_compra' => 'https://www.kawasaki.com/ninja-400'
            ]),
            Modelo::create([
                'nombre' => 'Z900',
                'marca_id' => $kawasaki->id,
                'precio' => 9499,
                'imagen' => 'https://centromotopalma.es/storage/app/uploads/public/631/8fc/2bb/6318fc2bbffe2410260406.jpg',
                'url_compra' => 'https://www.kawasaki.com/z900'
            ]),
            Modelo::create([
                'nombre' => 'Z650',
                'marca_id' => $kawasaki->id,
                'precio' => 7499,
                'imagen' => 'https://motoproalcobendas.com/wp-content/uploads/2025/06/Z650-010.jpg',
                'url_compra' => 'https://www.kawasaki.com/z650'
            ]),
            Modelo::create([
                'nombre' => 'Ninja H2',
                'marca_id' => $kawasaki->id,
                'precio' => 29999,
                'imagen' => 'https://www.motodecibel.com/img/ybc_blog/post/scarichi_kawasaki_ninja_h2_1.jpg',
                'url_compra' => 'https://www.kawasaki.com/ninja-h2'
            ]),
            Modelo::create([
                'nombre' => 'Versys 1000',
                'marca_id' => $kawasaki->id,
                'precio' => 12999,
                'imagen' => 'https://centromotopalma.es/storage/app/uploads/public/662/ba3/401/662ba340186e1017747092.jpg',
                'url_compra' => 'https://www.kawasaki.com/versys-1000'
            ]),
            Modelo::create([
                'nombre' => 'Versys 650',
                'marca_id' => $kawasaki->id,
                'precio' => 8499,
                'imagen' => 'https://centromotopalma.es/storage/app/uploads/public/662/b4c/0d8/662b4c0d87c43466633702.jpg',
                'url_compra' => 'https://www.kawasaki.com/versys-650'
            ]),
            Modelo::create([
                'nombre' => 'Z125',
                'marca_id' => $kawasaki->id,
                'precio' => 3999,
                'imagen' => 'https://tfsuperbike.com/adjuntos/noticias/imagenes/07ccb9.jpg',
                'url_compra' => 'https://www.kawasaki.com/z125'
            ]),
            Modelo::create([
                'nombre' => 'KLX230',
                'marca_id' => $kawasaki->id,
                'precio' => 4799,
                'imagen' => 'https://cdn-0.motocrossactionmag.com/wp-content/uploads/2025/01/25KLX232N_A271GN1DRF3CG_A.high_.jpg',
                'url_compra' => 'https://www.kawasaki.com/klx230'
            ]),
            Modelo::create([
                'nombre' => 'KLR650',
                'marca_id' => $kawasaki->id,
                'precio' => 6999,
                'imagen' => 'https://www.moto1pro.com/sites/default/files/1_kawasaki_klr_650_adventure_2025.jpg',
                'url_compra' => 'https://www.kawasaki.com/klr650'
            ]),
            Modelo::create([
                'nombre' => 'Ninja 650',
                'marca_id' => $kawasaki->id,
                'precio' => 7799,
                'imagen' => 'https://centromotopalma.es/storage/app/uploads/public/662/e0d/b6e/662e0db6e369c015231749.jpg',
                'url_compra' => 'https://www.kawasaki.com/ninja-650'
            ]),
            Modelo::create([
                'nombre' => 'Z1000',
                'marca_id' => $kawasaki->id,
                'precio' => 11499,
                'imagen' => 'https://www.mundomotero.com/wp-content/uploads/2019/08/Kawasaki-Z1000-2020-3.jpg',
                'url_compra' => 'https://www.kawasaki.com/z1000'
            ]),
            Modelo::create([
                'nombre' => 'Ninja 250',
                'marca_id' => $kawasaki->id,
                'precio' => 4499,
                'imagen' => 'https://cdn.motor1.com/images/mgl/o62Op/s1/2021-kawasaki-ninja-250-krt-edition---right-side.webp',
                'url_compra' => 'https://www.kawasaki.com/ninja-250'
            ]),
            Modelo::create([
                'nombre' => 'Z650RS',
                'marca_id' => $kawasaki->id,
                'precio' => 8999,
                'imagen' => 'https://motoproalcobendas.com/wp-content/uploads/2025/06/Z650RS-002.jpg',
                'url_compra' => 'https://www.kawasaki.com/z650rs'
            ]),
            // Aprilia
            Modelo::create([
                'nombre' => 'RS 660',
                'marca_id' => $aprilia->id,
                'precio' => 11499,
                'imagen' => 'https://maslittleitaly.es/wp-content/uploads/2024/01/Aprilia-rs660-full-lava-red.jpg',
                'url_compra' => 'https://www.aprilia.com/rs660'
            ]),
            Modelo::create([
                'nombre' => 'RSV4 1100 Factory',
                'marca_id' => $aprilia->id,
                'precio' => 29999,
                'imagen' => 'https://maslittleitaly.es/wp-content/uploads/2024/01/aprilia-rsv4-factory-time-attack-1.jpg',
                'url_compra' => 'https://www.aprilia.com/rsv4-1100-factory'
            ]),
            Modelo::create([
                'nombre' => 'Tuono V4 1100',
                'marca_id' => $aprilia->id,
                'precio' => 18999,
                'imagen' => 'https://maslittleitaly.es/wp-content/uploads/2025/01/TUONO-V4-Torque-Red_34dx_rossa-1100x733-1.jpg',
                'url_compra' => 'https://www.aprilia.com/tuono-v4-1100'
            ]),
            Modelo::create([
                'nombre' => 'Shiver 900',
                'marca_id' => $aprilia->id,
                'precio' => 9999,
                'imagen' => 'https://i.blogs.es/0b30a9/aprilia-shiver-900-2017/1366_2000.jpg',
                'url_compra' => 'https://www.aprilia.com/shiver-900'
            ]),
            Modelo::create([
                'nombre' => 'Dorsoduro 900',
                'marca_id' => $aprilia->id,
                'precio' => 10999,
                'imagen' => 'https://www.motoplanete.com/aprilia/zoom-700px/Aprilia-900-Dorsoduro-2017-700px.webp',
                'url_compra' => 'https://www.aprilia.com/dorsoduro-900'
            ]),
            Modelo::create([
                'nombre' => 'RS 125',
                'marca_id' => $aprilia->id,
                'precio' => 4999,
                'imagen' => 'https://www.motofichas.com/images/phocagallery/Aprilia/rs-125-2025/10-aprilia-rs-125-2025-estudio-amarillo-01.jpg',
                'url_compra' => 'https://www.aprilia.com/rs125'
            ]),
            Modelo::create([
                'nombre' => 'Tuono 660',
                'marca_id' => $aprilia->id,
                'precio' => 10999,
                'imagen' => 'https://www.motoplanete.com/aprilia/zoom-700px/Aprilia-Tuono-660-2021-700px.webp',
                'url_compra' => 'https://www.aprilia.com/tuono-660'
            ]),
            Modelo::create([
                'nombre' => 'SR GT 200',
                'marca_id' => $aprilia->id,
                'precio' => 3999,
                'imagen' => 'https://maslittleitaly.es/wp-content/uploads/2025/03/Aprilia_SR_GT_200_ABS_infinity_blue_3-4AntDX_bianco-scaled.jpg',
                'url_compra' => 'https://www.aprilia.com/sr-gt-200'
            ]),
            Modelo::create([
                'nombre' => 'Caponord 1200',
                'marca_id' => $aprilia->id,
                'precio' => 15999,
                'imagen' => 'https://motos.espirituracer.com/archivos/2019/11/aprilia-caponord-1200-rally-10.jpeg',
                'url_compra' => 'https://www.aprilia.com/caponord-1200'
            ]),
            Modelo::create([
                'nombre' => 'RX 50',
                'marca_id' => $aprilia->id,
                'precio' => 2999,
                'imagen' => 'https://as.sobrenet.pt/s/image/tsr/brandm/product/1920x1280/qk3htopmasxstapciqdempacii2.jpg',
                'url_compra' => 'https://www.aprilia.com/rx50'
            ]),
            Modelo::create([
                'nombre' => 'RSV4 RF',
                'marca_id' => $aprilia->id,
                'precio' => 26999,
                'imagen' => 'https://www.motofichas.com/images/phocagallery/Aprilia/RSV4_RF_2017/001-aprilia-rsv4-rf-2018-perfil.jpg',
                'url_compra' => 'https://www.aprilia.com/rsv4-rf'
            ]),
            Modelo::create([
                'nombre' => 'SX 125',
                'marca_id' => $aprilia->id,
                'precio' => 3999,
                'imagen' => 'https://www.motofichas.com/images/phocagallery/Aprilia/sx-125-2025/10-aprilia-sx-125-2025-estudio-blanco-01.jpg',
                'url_compra' => 'https://www.aprilia.com/sx-125'
            ]),
            Modelo::create([
                'nombre' => 'Dorsoduro 750',
                'marca_id' => $aprilia->id,
                'precio' => 9999,
                'imagen' => 'https://www.motofichas.com/images/phocagallery/Aprilia/Dorsoduro_750_Factory/Factory/aprilia_dorsoduro_factory.jpg',
                'url_compra' => 'https://www.aprilia.com/dorsoduro-750'
            ]),
            Modelo::create([
                'nombre' => 'RSV4 Factory',
                'marca_id' => $aprilia->id,
                'precio' => 24999,
                'imagen' => 'https://www.motofichas.com/images/phocagallery/Aprilia/rsv4-factory-2025/09-aprilia-rsv4-factory-2026-estudio-morado-negro-indigo-01.jpg',
                'url_compra' => 'https://www.aprilia.com/rsv4-factory'
            ]),
            Modelo::create([
                'nombre' => 'SR 50',
                'marca_id' => $aprilia->id,
                'precio' => 2999,
                'imagen' => 'https://www.motofichas.com/images/phocagallery/Aprilia/sr-50-r-2018/01-aprilia-sr-50-r-2018-perfil.jpg',
                'url_compra' => 'https://www.aprilia.com/sr50'
            ]),
            // Ducati
            Modelo::create([
                'nombre' => 'Panigale V4',
                'marca_id' => $ducati->id,
                'precio' => 23999,
                'imagen' => 'https://www.ducaticanarias.com/wp-content/uploads/2022/07/DUCATI_PANIGALE_V4S_STATIC_001_UC355519_High.jpg',
                'url_compra' => 'https://www.ducati.com/panigale-v4'
            ]),
            Modelo::create([
                'nombre' => 'Monster 1200',
                'marca_id' => $ducati->id,
                'precio' => 15999,
                'imagen' => 'https://www.motofichas.com/images/phocagallery/Ducati_Motor_Holding_SpA/Monster_1200_2017/01-ducati-monster-1200-2017.jpg',
                'url_compra' => 'https://www.ducati.com/monster-1200'
            ]),
            Modelo::create([
                'nombre' => 'Multistrada V4',
                'marca_id' => $ducati->id,
                'precio' => 23999,
                'imagen' => 'https://www.motofichas.com/images/phocagallery/ducati/multistrada-v4-2021/01-ducati-multistrada-v4-2021-estudio-rojo.jpg',
                'url_compra' => 'https://www.ducati.com/multistrada-v4'
            ]),
            Modelo::create([
                'nombre' => 'Scrambler Icon',
                'marca_id' => $ducati->id,
                'precio' => 9499,
                'imagen' => 'https://www.scramblerducati.com/wp-content/uploads/2024/10/Scrambler-Icon-Dark-MY25-pagina-prodotto-media-slider-1920x1080-05.jpg',
                'url_compra' => 'https://www.ducati.com/scrambler-icon'
            ]),
            Modelo::create([
                'nombre' => 'Diavel 1260',
                'marca_id' => $ducati->id,
                'precio' => 17999,
                'imagen' => 'https://ducatimadrid.com/wp-content/uploads/2024/05/ducati-diavel-1260.png.webp',
                'url_compra' => 'https://www.ducati.com/diavel-1260'
            ]),
            Modelo::create([
                'nombre' => 'Hypermotard 950',
                'marca_id' => $ducati->id,
                'precio' => 12999,
                'imagen' => 'https://ducatimadrid.com/wp-content/uploads/2024/04/HYPERMOTARD950-1.jpg.webp',
                'url_compra' => 'https://www.ducati.com/hypermotard-950'
            ]),
            Modelo::create([
                'nombre' => 'Panigale V2',
                'marca_id' => $ducati->id,
                'precio' => 15999,
                'imagen' => 'https://cdn.motor1.com/images/mgl/W8YejL/s1/2025-panigale-v2-and-v2s.webp',
                'url_compra' => 'https://www.ducati.com/panigale-v2'
            ]),
            Modelo::create([
                'nombre' => 'Monster 821',
                'marca_id' => $ducati->id,
                'precio' => 11499,
                'imagen' => 'https://ducatimadrid.com/wp-content/uploads/2024/05/ducati-monster-821.png.webp',
                'url_compra' => 'https://www.ducati.com/monster-821'
            ]),
            Modelo::create([
                'nombre' => 'SuperSport 950',
                'marca_id' => $ducati->id,
                'precio' => 12499,
                'imagen' => 'https://www.moto.ch/wp-content/uploads/2020/11/Ducati_SuperSport_950__01.jpg',
                'url_compra' => 'https://www.ducati.com/supersport-950'
            ]),
            Modelo::create([
                'nombre' => 'Scrambler Desert Sled',
                'marca_id' => $ducati->id,
                'precio' => 10499,
                'imagen' => 'https://www.motofichas.com/images/phocagallery/Ducati_Motor_Holding_SpA/scrambler-desert-sled-2021/01-ducati-scrambler-desert-sled-2021-estudio.jpg',
                'url_compra' => 'https://www.ducati.com/scrambler-desert-sled'
            ]),
            Modelo::create([
                'nombre' => 'Streetfighter V4',
                'marca_id' => $ducati->id,
                'precio' => 21999,
                'imagen' => 'https://www.motofichas.com/images/phocagallery/ducati/streetfighter-v4-2025/09-ducati-streetfighter-v4-2025-01.jpg',
                'url_compra' => 'https://www.ducati.com/streetfighter-v4'
            ]),
            Modelo::create([
                'nombre' => 'Multistrada 950',
                'marca_id' => $ducati->id,
                'precio' => 15999,
                'imagen' => 'https://ducatimadrid.com/wp-content/uploads/2024/05/ducati-multistrada-950.png.webp',
                'url_compra' => 'https://www.ducati.com/multistrada-950'
            ]),
            Modelo::create([
                'nombre' => 'Diavel 1260 S',
                'marca_id' => $ducati->id,
                'precio' => 18999,
                'imagen' => 'https://www.motoplanete.com/ducati/zoom-700px/Ducati-1260-Diavel-S-2022-700-px.webp',
                'url_compra' => 'https://www.ducati.com/diavel-1260-s'
            ]),
            Modelo::create([
                'nombre' => 'Monster Plus',
                'marca_id' => $ducati->id,
                'precio' => 13499,
                'imagen' => 'https://www.webbikeworld.com/wp-content/uploads/2023/06/2023-Ducati-Monster-4.jpg',
                'url_compra' => 'https://www.ducati.com/monster-plus'
            ]),
            Modelo::create([
                'nombre' => 'Scrambler Full Throttle',
                'marca_id' => $ducati->id,
                'precio' => 10499,
                'imagen' => 'https://www.scramblerducati.com/wp-content/uploads/2024/01/Scrambler-single-bike-full-throttle-highlight-slider-1920x1080-02-1.jpg',
                'url_compra' => 'https://www.ducati.com/scrambler-full-throttle'
            ]),

        ];

        $this->command->info('Modelos seeder ejecutado con éxito.');
    }
}
