import { ref, computed } from 'vue'
import { defineStore } from 'pinia'
import api  from '../services/api';

export const useProductsStore = defineStore('products',  {
   state: () => {
        // const products= {
        //     0:{
        //         id: 1,
        //         name: "Tomato",
        //         category: "Fruit",
        //         price: 200,
        //         availability: true,
        //         image: '/home1.jpg'
        //     },
        //     1:{
        //         id: 2,
        //         name: "Carrot",
        //         category: "Fruit",
        //         price: 200,
        //         availability: true,
        //         image: '/home2.jpg'
        //     },
        //     2:{
        //         id: 3,
        //         name: "Onion",
        //         category: "Fruit",
        //         price: 200,
        //         availability: true,
        //         image: '/home3.jpg'
        //     },
        //     3:{
        //         id: 4,
        //         name: "Tomato",
        //         category: "Fruit",
        //         price: 200,
        //         availability: true,
        //         image: '/home1.jpg'
        //     },
        //     4:{
        //         id: 5,
        //         name: "Tomato",
        //         category: "Fruit",
        //         price: 200,
        //         availability: true,
        //         image: '/home1.jpg'
        //     },
        //     5:{
        //         id: 6,
        //         name: "Tomato",
        //         category: "Fruit",
        //         price: 200,
        //         availability: true,
        //         image: '/home1.jpg'
        //     },
        // }
        const products = ref([])
        const selectedProduct = ref(null)

        async function fetchProducts() {
          const response = await api.get('fetchAllProducts')
            products.value = response.data

        }
       
        return{
            products, selectedProduct, fetchProducts
        }
   },
   actions:{
       updateSelectedProduct (payload) {
            this.selectedProduct = payload
        },
        
        addProduct(payload) {
            //get the last key in the products object
            const existingKeys = Object.keys(this.products).map(Number);
            const maxKey = existingKeys.length > 0 ? Math.max(...existingKeys) : 0;
            const nextKey = maxKey + 1;

            //insert into object
            this.products[nextKey] = {
                ...payload,
                id: nextKey
            };
        },
        updateProduct(id, payload) {
            // find the product in the object
            const product = Object.entries(this.products).find(
                ([key, item]) => item.id === id //compare the ids
            );

            if (!product) {
                console.error(`No product found with id: ${id}`);
                return;
            }

            const [objectKey] = product;

            //replace the existing product data with what was received in payload
            this.products[objectKey] = {
                ...this.products[objectKey], 
                ...payload
            };
        },
        deleteProduct(id) {
            const product = Object.entries(this.products).find(
                ([key, item]) => item.id === id
            );
            if (!product) {
                console.error(`Cannot delete: No product found id: ${id}`);
                return;
            }

            const [objectKey] = product;

            delete this.products[objectKey];
        }
   },
   persist: true,
})