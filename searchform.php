<form action="" role="search" method="get" action="<?php echo home_url('/'); ?>">
                        <input type="text" class="form-control search-field" placeholder="Search the blog" id="search" name="s" value="<?php get_search_query(); ?>">
                            <input type="submit" value="search" class="d-none">
                    </form>