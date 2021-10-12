<template>
    <div class="form-group col-sm-12 flex-column d-flex text-left">
        <div class="form-group">
            <label for="category">Chọn thể loại</label>
            <select
                class="form-control"
                name="loaimon"
                v-model="loaimon"
            >
                <option
                    v-for="category in categories"
                    :key="category.id"
                    :value="category.id"
                    >{{ category.tenloaima }}</option
                >
            </select>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            categories: [],
            loaimon: 2,
        }
    },
    methods: {
        getCategories() {
            axios.get("/api/categories").then(response => {
                this.categories = response.data.categories;
            });
        },
    },
    mounted() {
        this.getCategories();
    },

};
</script>

<style></style>
