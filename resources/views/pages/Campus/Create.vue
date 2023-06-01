<template>
    <div class="g-sidenav-show  bg-gray-100">
        <Sidebar></Sidebar>
        <main class="main-content position-relative bg-gray-100 max-height-vh-100 h-100 ">
            <TopNav></TopNav>
            <div class="container-fluid">
                <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../../../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                
                <div class="col-auto my-auto">
                    <div class="h-100">
                    <h5 class="mb-1">
                        New Campus
                    </h5>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                <div class="multisteps-form">
                    <!--form panels-->
                    <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        <form @submit.prevent="submit" class="multisteps-form__form mb-8">
                        <!--single form panel-->
                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                          
                            <div class="multisteps-form__content">
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                <label>Name</label>
                                <input v-model="form.name" class="multisteps-form__input form-control" type="text" />
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <label>Status</label>
                                <select v-model="form.active"  class="form-control" required>
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>
                                </div>
                            </div>  
                            <div class="button-row d-flex mt-4">
                                <button type="submit" :disabled="isDisable" class="btn bg-gradient-dark ms-auto mb-0 js-btn-next">Save</button>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </main>
    </div>
</template>


<script >
import Sidebar from '../../layouts/SideNav.vue'
import TopNav from '../../layouts/TopNav.vue'
import Footer from '../../layouts/Footer.vue'
import { Inertia } from '@inertiajs/inertia'
export default {
    components: {
        Sidebar,
        TopNav
    },
    props: {
        currentPage:String,
        campus:Array
    },
    data(){
        return {
            success:false,
            danger:false,
            SuccessResponse:'',
            ErrorResponse:'',
            form: this.$inertia.form({
              'name' : '',
              'active' : 1,
            }),
		    isDisable:false,
            errors: [],
        }
    },
    methods:{
        submit(){
            this.isDisable=true;
            Inertia.post('new-campus', this.form)


        }
    }
}
</script>