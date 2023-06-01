<template>
    <div class="g-sidenav-show  bg-gray-100">
        <Sidebar></Sidebar>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <TopNav></TopNav>
            <div class="container-fluid py-4">
                <div class="row">
                <div class="col-12">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header pb-0">
                    <div class="d-lg-flex">
                        <div>
                        <h5 class="mb-0">All Courses</h5>
                        </div>
                        <div class="ms-auto my-auto mt-lg-0 mt-4">
                        <div class="ms-auto my-auto">
                            <Link href="/addCourse" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; New Course</Link>
                            <!-- <button type="button" class="btn btn-outline-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#import">
                            Import
                            </button> -->
                            <!-- Modal start -->
                             <!-- <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog mt-lg-10">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel">Campus </h5>
                                </div>
                                <div class="modal-body">
                                    <form @submit.prevent="submit" >
                                
                                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                        
                                            <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                <label>Name</label>
                                                <input  class="multisteps-form__input form-control" type="text" />
                                                </div>
                                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Status</label>
                                                <select   class="form-control" required>
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
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn bg-gradient-primary btn-sm">Update</button>
                                </div>
                                </div>
                            </div>
                            </div>   -->
                            <!-- Modal end -->
                            <!-- <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button> -->
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class="table table-flush" id="products-list">
                        <thead class="thead-light">
                            <tr>
                            <th>Name</th>
                            <th>code</th>
                            <th>Funded</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-if="campus.length == 0">
                                No data available
                            </tr>
                            <tr v-for="(item, index) in campus" :key="index" v-if="campus.length >0">
                                <td class="text-sm"><h6>{{item.name}}</h6></td>
                                <td class="text-sm">
                                    {{ item.code }}
                                </td>
                                <td class="text-sm">
                                    {{ item.funded }}
                                </td>
                                <td class="text-sm">
                                    <a href="javascript:;" @click="openModal()" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                    <i class="fas fa-eye text-secondary"></i>
                                    </a>
                                    <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                    <i class="fas fa-user-edit text-secondary"></i>
                                    </a>
                                    <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                    <i class="fas fa-trash text-secondary"></i>
                                    </a>
                                </td>
                            </tr>

                        </tbody>    
                        </table>
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
import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: {
        Sidebar,
        TopNav,
        Link,
    },
    props: {
        currentPage:String,
        campus:Array
    },
    data(){
        return {
        }
    },
    methods:{
        
    }
    
}
</script>